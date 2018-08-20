<?php

namespace App\Http\Controllers;


use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $mightAlsoLike=Product::mightAlsoLike()->get();
        return view('cart.index', compact('mightAlsoLike'));
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
       // dd($request->all());
        /*if (Auth::guest()){

        }*/

      $duplicates=Cart::search(function($cartItem, $rowId) use ($request) {

              return $cartItem->id === $request->id;
        });

        //pr($duplicates);
        //pr($duplicates->count(), true);


      if($duplicates->count() > 0){
         // echo 'i am not empty'; exit;
          return redirect()->route('cart.index')->with('Success_Message', 'This Item is already in your Cart');
      }
      else{
    //echo 'i am empty';
          Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
          if(Auth::check()){
              return redirect()->route('cart.index')->with('Success_Message', 'Product successfully added to your Cart!');
          } elseif(Auth::guest()){

              if($duplicates->count() > 0)
                  return redirect()->back();
              else{
                  return redirect()->route('welcome');
              }

          }
      }



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
        //
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
        return back()->with('Success_Message', 'Product Successfully Removed!');
    }

    /**
     * WishList.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function wishList($id)

    {

           $cartItem=Cart::get($id);

            Cart::remove($id);
            $duplicates= Cart::instance('wishList')->search(function($cartItem, $rowId) use ($id) {

                return $rowId === $id;
            });





            if($duplicates->count() > 0){

                return redirect()->route('wishlist.index')->with('Success_Message', 'This already in your Wishlist');
            }
            else{

                Cart::instance('wishList')->add($cartItem->id, $cartItem->name, 1, $cartItem->price)->associate('App\Product');
                if(Auth::check()){
                    return redirect()->route('wishlist.index')->with('Success_Message', 'Product successfully added to your Wishlist!');
                } else{
                    return redirect()->route('welcome');
                }
            }




        }


}
