<?php

namespace App\Http\Controllers;

use App\Product1;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mightAlsoLike = Product1::inRandomOrder()->take(8)->get();
        return view('wishlist',['mightAlsoLike'=>$mightAlsoLike]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Category::with('children')->where('p_id', 0)->get();
        $duplicates =Cart::instance('SaveForLater')->search(function ($cartItem, $rowId) use ($request){
            return  $cartItem->id === $request->id;
        });
        if ($duplicates->isNotEmpty()){
            return  redirect()->route('WishlistController.index')->with('success_message', 'Item is already in your wishlist');
        }

        Cart::instance('SaveForLater')->add($request->id, $request->name,1 , $request->price)->associate('App\Product1');

        return redirect()->route('WishlistController.index',[
            'categories'=>$categories,
        ])->with('success_message','Item has been successfully added to tour wish list!');
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

        Cart::instance('SaveForLater')->add($item->id, $item->name,1 , $item->price)->associate('App\Product1');

        return redirect()->route('WishlistController.index')->with('success_message','Item has been successfully saved for later!');
    }
}
