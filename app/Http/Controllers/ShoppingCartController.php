<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\Product1;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('children')->where('p_id', 0)->get();
        $mightAlsoLike = Product::inRandomOrder()->take(8)->get();

        $tax = config('cart.tax')/ 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;
        $newSubtotal = (Cart::subtotal() - $discount);
        if($newSubtotal < 0){
            $newSubtotal = 0;
        }
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal + $newTax;

        return view('cart',[
            'mightAlsoLike'=>$mightAlsoLike,
            'categories'=>$categories,
            'discount'=>$discount,
            'code' => $code,
            'newSubtotal'=>$newSubtotal,
            'newTax'=>$newTax,
            'newTotal'=>$newTotal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request){
            return  $cartItem->id === $request->id;
    });
        if ($duplicates->isNotEmpty()){
            return  redirect()->route('ShoppingCart.index')->with('success_message', 'Item is already in your cart');
        }

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');

        return redirect()->route('ShoppingCart.index')->with('success_message','Item has been successfully added to cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,20'
        ]);
        if ($validator->fails()){
            session()->flash('errors', collect('Quantity must be between 1 and 100'));
            return response()->json(['success' => false], 400);
        }
        if ($request->quantity > $request->productQuantity){
            session()->flash('errors', collect('We currently have no enough items in stock'));
            return response()->json(['success' => false], 400);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed successfully');
    }
    public function switchToSaveForLater($id)
    {

        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('SaveForLater')->search(function ($cartItem, $rowId) use ($id){
            return  $rowId === $id;
        });
        if ($duplicates->isNotEmpty()){
            return  redirect()->route('WishlistController.index')->with('success_message', 'Item is already Saved for later');
        }

        Cart::instance('SaveForLater')->add($item->id, $item->name,1 , $item->price)->associate('App\Product');

        return redirect()->route('WishlistController.index')->with('success_message','Item has been successfully saved for later!');
    }
}
