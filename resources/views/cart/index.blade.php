@include('inc.pageheader')





    @include('inc.cartsuccess')

    <div style="font-weight: bold; ">
        @if((Cart::count()) > 0)
            {{Cart::count()}} item(s) are in your cart
        @elseif((Cart::count()) < 1)
            <div style="text-align: center; padding-bottom: 40px;">Your Shopping Cart is Empty</div>
        @endif
    </div>

    <section class="ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 mb-xs-30">
                    <div class="cart-item-table commun-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(Cart::content())
                                    @foreach(Cart::content() as $cartItem)

                                <tr>
                                    <td>{{--<a href="{{route('product.show',['id'=>$product->id])}}">--}}
                                            <div class="product-image"><img alt="Electro" src="images/1.jpg"></div>
                                        {{--</a>--}}</td>
                                    <td><div class="product-title"> <a href="{{route('product.show', [$cartItem->model->id])}}">{{$cartItem->model->name}}</a></div></td>
                                    <td><ul>
                                            <li>
                                                <div class="base-price price-box"> <span class="price">₦{{$cartItem->model->price}}</span> </div>
                                            </li>
                                        </ul></td>
                                    <td><div class="input-box">
                                            <select data-id="100" class="quantity_cart" name="quantity_cart">
                                                <option selected="" value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div></td>
                                    <td><div class="total-price price-box"> <span class="price">₦{{$cartItem->model->price}}</span> </div></td>
                                    <td>
                                        <form action="{{route('cart.destroy', [$cartItem->rowId])}}" method="POST">
                                            {{Form::token()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit"><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></button>
                                        </form>

                                </tr>
                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-30">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mt-30"> <a href="{{route('products.index')}}" class="btn btn-color"><span><i class="fa fa-angle-left"></i></span>Continue Shopping</a> </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mt-30 right-side float-none-xs"> <a class="btn btn-color">Update Cart</a> </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mtb-30">
                <div class="row">
                    <div class="col-sm-6 mb-xs-40">
                        <div class="estimate">
                            <div class="heading-part mb-20">
                                
                            </div>

                        </div>
                    </div>
                    @if((Cart::count())>=1)
                    <div class="col-sm-6">
                        <div class="cart-total-table commun-table">
                            <div class="table-responsive">


                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Cart Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Item(s) Subtotal</td>
                                        <td><div class="price-box"> <span class="price">₦{{Cart::subtotal()}}</span> </div></td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td><div class="price-box"> <span class="price">₦{{Cart::tax()}}</span> </div></td>
                                    </tr>
                                    <tr>
                                        <td><b>Amount Payable</b></td>
                                        <td><div class="price-box"> <span class="price"><b>₦{{Cart::total()}}</b></span> </div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        @endif
                </div>
            </div>
            <hr>
            <div class="mt-30">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="right-side float-none-xs"> <a href="{{route('checkout.index')}}" class="btn btn-color">Proceed to checkout<span><i class="fa fa-angle-right"></i></span></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <div class="content">




        <!-- Detached content -->
        <div class="container-detached">
            <div class="content-detached">

                @if(Cart::count()<1)
                    <div style="font-weight: 100; font-size: 20px; text-align: center">Check Out our <a href="{{route('products.index')}}">Products Store</a></div>


                    @if(Cart::instance('wishList')->content())
                        @foreach(Cart::instance('wishList')->content() as $wishlist)


                            <div class="col-lg-3 col-sm-6">
                                <div class="panel">
                                    <div class="panel-body">

                                        <div  class="thumb thumb-fixed">

                                           <img   src="/images/{{isset($product->photo)?$product->photo['file']:"has no photo"}}" alt="">

                                        </div>
                                    </div>


                                    <div class="panel-body panel-body-accent text-center">


                                        <a href="{{route('product.show',['id'=>$wishlist->id])}}"><h3 class="no-margin text-semibold">{{$wishlist->name}}</h3></a>



                                        <div style="font-size:20px" class="text-semibold ">N{{$wishlist->price}}</div>

                                        <form action="{{route('cart.store')}}" method="POST">
                                            {{Form::token()}}
                                            <input type="hidden" name="id" value="{{$wishlist->id}}">
                                            <input type="hidden" name="name" value="{{$wishlist->name}}">
                                            <input type="hidden" name="price" value="{{$wishlist->price}}">
                                            <button type="submit" class="btn bg-teal-400 mt-15"><i class="icon-cart-add position-left"></i> Add to cart</button>
                                        </form>


                                    </div>

                                </div>

                            </div>
                        @endforeach
                        @else
                         Your Wish list is Empty
                    @endif


                 @else



                    <div style="text-align: center" class="heading-part mb-20">
                        <h2 class="sub-heading">You May Also Like</h2>
                    </div>

                    @include('inc.mightalsolike')
                @endif


            </div>
        </div>


    </div>





    @include('inc.footer')
