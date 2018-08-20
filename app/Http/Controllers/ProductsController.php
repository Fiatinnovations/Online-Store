<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Photo;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Image;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();


        return view('products.index', compact('products'));



    }

   /* This is used to determine the class of models (the get_class() method)
    * dd(get_class($products));
    * dd($products->toJson());
    *
    *  public function addToCart(Request $request, $id ){
        $product=Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('products.index');  }*/


       /* Cart::add('293ad', 'Product 1', 1, 9.99);
        Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'options' => ['size' => 'large']]);*/

       /* $cart->$request->all();*/



       /* Cart::add();*/








    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
           'name'=>'required|string',
           'price'=> 'required|integer',
           'description' =>'required|max:255',
       ]);

                    $user=Auth::user();
                    $input=$request->all();
                    if($file=$request->file('photo_id')){
                    $name=time() . $file->getClientOriginalName();

                    $success = $file-> move('images',$name);

                    if($success){
                    //add watermark..
                       $img = Image::make(public_path() . DS . 'images'.DS. $name);

                       //get the watermark image...
                       $watermark = Image::make(public_path() . DS . 'wmark.png');

                       //insert the watermark at the top right corner...
                       $img->insert($watermark, 'top-right', 10, 10);

                       //save to the original image...
                       $img->save(public_path() . DS . 'images'.DS. $name );
               }


            $photo=Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;

        }

        if ($validator->fails()){

            return redirect('products/create')->withErrors($validator)->withInput();
        }

        else{
            $user->Product()->create($input);
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
        $product=Product::findOrFail($id);
        $mightAlsoLike =Product::where('id', '!=', $product->id)->mightAlsoLike()->get();
        return view('products.show', compact('product','mightAlsoLike'));

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
        //
    }
}
