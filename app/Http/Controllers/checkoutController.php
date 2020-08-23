<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\checkoutRequest;
use App\Mail\OrderPlaced;
use App\Order;
use App\OrderProduct;
use App\Product;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Exception\MissingParameterException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Exception;

class checkoutController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')->where('p_id', 0)->get();

        $tax = config('cart.tax')/ 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal + $newTax;

        if (Cart::instance('default')->count() == 0){
            return redirect()->route('shop.index');
        }
        if (auth()->user() && request()->is('guestCheckout')){
            return redirect()->route('checkout.index');
        }
        return view('checkout',[
            'categories'=>$categories,
            'tax'=> $tax,
            'discount'=>$discount,
            'code' => $code,
            'newSubtotal'=>$newSubtotal,
            'newTax'=>$newTax,
            'newTotal'=>$newTotal
        ]);
    }


    public function store(checkoutRequest $request)
    {
        //Check race condition when there are less items available in stock
        if ($this->productsAreNoLongerAvailable){
            return back()->withErrors('Sorry! One of the items in your cart is no longer available.');
        }

        $tax = config('cart.tax')/ 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal + $newTax;
        try {
            $contents = Cart::content()->map(function ($item){
                return $item->model->slug.', '.$item->qty;
            })->values()->toJson();

            $charge = Stripe::charges()->create([
               'amount' => $newTotal / 100,
               'currency' => 'USD',
               'source' => $request->stripeToken,
               'description' => 'Order',
               'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    'discount'=>collect(session()->get('coupon'))->toJson(),
                ],

            ]);
            $order = $this->addToOrdersTables($request, null);
            Mail::send(new OrderPlaced($order));

            //decrease the quantity of all products in the cart
            $this->decreaseQuantities();

            //SUCCESSFUL
            Cart::instance('default')->destroy();
            session()->forget('coupon');
//            return back()->with('success_message', 'Thank you! your payment has been successfully accepted');
               return redirect()->route('comfirmation.index')->with('success_message', 'Thank you! your payment has been successfully accepted');
        } catch (CardErrorException $e){
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error!' . $e->getMessage());

        }

    }
    protected function addToOrdersTables($request, $error){
        //INSERT INTO THE ORDERS TABLE
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_country' => $request->country,
            'billing_city' => $request->city,
            'billing_province' => $request->province,
            'billing_postalcode' => $request->postalcode,
            'billing_phone' => $request->phone,
            'billing_name_on_card' => $request->name_on_card,
            'billing_discount' => $this->getNumbers()->get('discount'),
            'billing_discount_code' => $this->getNumbers()->get('code'),
            'billing_subtotal' => $this->getNumbers()->get('newSubtotal'),
            'billing_tax' => $this->getNumbers()->get('newTax'),
            'billing_total' => $this->getNumbers()->get('newTotal'),
            'error' => $error
        ]);
        //INSERT INTO THE ORDERS_PRODUCTS TABLE
        foreach (Cart::content() as $item){
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }
        return $order;
    }
    protected function decreaseQuantities(){
        foreach (Cart::content() as $item){
             $product = Product::find($item->model->id);

             $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    protected function productsAreNoLongerAvailable(){
        foreach (Cart::content() as $item){
            $product = Product::find($item->model->id);
            if ($product->quantity < $item->qty){
                return true;
            }
        }
        return false;
    }

    private function getNumbers(){
        $tax = config('cart.tax')/ 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal + $newTax;

        return collect([
            'tax'=> $tax,
            'discount'=>$discount,
            'code' => $code,
            'newSubtotal'=>$newSubtotal,
            'newTax'=>$newTax,
            'newTotal'=>$newTotal
        ]);
    }
}
