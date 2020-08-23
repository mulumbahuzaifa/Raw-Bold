<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class SaveForLaterController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('SaveForLater')->remove($id);

        return back()->with('success_message', 'Item has been removed successfully');
    }

    public function switchToCart($id)
    {

        $item = Cart::instance('SaveForLater')->get($id);

        Cart::instance('SaveForLater')->remove($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id){
            return  $rowId === $id;
        });
        if ($duplicates->isNotEmpty()){
            return  redirect()->route('ShoppingCart.index')->with('success_message', 'Item is already in your cart ');
        }

        Cart::instance('default')->add($item->id, $item->name,1 , $item->price)->associate('App\Product1');

        return redirect()->route('ShoppingCart.index')->with('success_message','Item has been moved to cart!');
    }
}
