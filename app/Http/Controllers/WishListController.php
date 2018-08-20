<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;

class WishListController extends Controller
{

    public function index()
    {

        /*Return the content of your wishlist*/


        $wishlists=Cart::instance('wishList')->content();
        return view('products.wish', compact('wishlists'));

    }

    public function destroy($id)
    {
        $wishlist=Cart::instance('wishList')->remove($id);
        return back()->with('Success_Message', 'Wishlist Successfully Removed!', compact('wishlist'));
    }

    /*Switch aItem from Wishlist to Cart*/

    public function switchToCart($id){

        $wishlist=Cart::instance('wishList')->get($id);

        Cart::instance('wishList')->remove($id);

        $duplicates = Cart::instance('default')->search(function($wishlist, $rowId) use ($id) {
            return $rowId===$id;
            });
        if ($duplicates > 0){
            return redirect()->route('cart.index')->with('Success_Message','Product already in your Cart');
        }

        else{
             Cart::instance('default')->add($wishlist->id, $wishlist->name, $wishlist->price)->associate('product');
             return redirect()->route('cart.index')->with('Success_message', 'Product added to your Shopping Cart');
        }



    }



}
