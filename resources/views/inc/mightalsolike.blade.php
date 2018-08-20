<div style=" margin-left: 1%; " class="row">



    <!-- Grid -->

    <div class="product-listing">
        <div  class="inner-listing">
            <div  class="row">
                @foreach($mightAlsoLike as $product)
                        <div class="col-md-3 col-xs-12 ">

                            <div class="product-item">
                                <div class="product-image"> <a href="product-page.html">  <img   src="/images/{{isset($product->photo)?$product->photo['file']:"has no photo"}}" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form action="{{route('cart.store')}}" method="POST">
                                                        {{Form::token()}}
                                                        <input type="hidden" name="id" value="{{$product->id}}">
                                                        <input type="hidden" name="name" value="{{$product->name}}">
                                                        <input type="hidden" name="price" value="{{$product->price}}">
                                                        <button type="submit" class="btn bg-teal-400 mt-15"><i class="icon-cart-add position-left"></i> Add to cart</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="detail-inner-left right-side">
                                            <ul>
                                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">{{$product->name}}</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">N{{$product->price}}</del> </div>
                                    <div class="rating-summary-block right-side">
                                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

            </div>
        </div>
    </div>

</div>
















