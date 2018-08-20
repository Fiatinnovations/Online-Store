<section class="ptb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 mb-sm-30 col-lgmd-20per">
                <div class="sidebar-block">
                    <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3>Categories</h3> <span></span>
                        </div>
                        <div class="sidebar-contant">
                            <ul>
                                <li><a>Clothing <span>(21)</span></a></li>
                                <li><a>Shoes <span>(05)</span></a></li>
                                <li><a>Jewellery <span>(10)</span></a></li>
                                <li><a>Furniture <span>(12)</span></a></li>
                                <li><a>Bags <span>(18)</span></a></li>
                                <li><a>Accessories <span>(70)</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3>Best Seller</h3> <span></span>
                        </div>
                        <div class="sidebar-contant">
                            <ul>
                               @if($products)
                                   @foreach($products as $product)
                                <li>
                                    <div class="pro-media"> <a><img alt="T-shirt" src="images/{{isset($product->photo)? $product->photo['file']:""}}"></a> </div>
                                    <div class="pro-detail-info"> <a>{{$product->name}}</a>
                                        <div class="rating-summary-block">
                                            <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                                        </div>
                                        <div class="price-box"> <span class="price">{{$product->price}}</span> </div>
                                        <div class="cart-link">
                                            <form action="{{route('cart.store')}}" method="POST">
                                                {{Form::token()}}
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <input type="hidden" name="name" value="{{$product->name}}">
                                                <input type="hidden" name="price" value="{{$product->price}}">
                                                <button type="submit" class="btn bg-teal-400 mt-15"><i class="icon-cart-add position-left"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>

                                    @endforeach
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-lgmd-80per">
                <div class="inner-banner2 mb-40 visible-md visible-lg">
                    <a href="shop.html">
                        <img src="images/inner-banner2.jpg" alt="Electro">
                    </a>
                </div>
                <div class="shorting mb-30">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="view">
                                <div class="list-types grid active "> <a href="shop.html">
                                        <div class="grid-icon list-types-icon"></div>
                                    </a> </div>
                                <div class="list-types list"> <a href="shop-list.html">
                                        <div class="list-icon list-types-icon"></div>
                                    </a> </div>
                            </div>
                            <div class="short-by float-right-sm"> <span>Sort By</span>
                                <div class="select-item">
                                    <select>
                                        <option value="" selected="selected">Name (A to Z)</option>
                                        <option value="">Name(Z - A)</option>
                                        <option value="">price(low&gt;high)</option>
                                        <option value="">price(high &gt; low)</option>
                                        <option value="">rating(highest)</option>
                                        <option value="">rating(lowest)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="show-item right-side float-left-sm"> <span>Show</span>
                                <div class="select-item">
                                    <select>
                                        <option value="" selected="selected">24</option>
                                        <option value="">12</option>
                                        <option value="">6</option>
                                    </select>
                                </div>
                                <span>Per Page</span>
                                <div class="compare float-right-sm"> <a href="#" class="btn btn-color">Compare (0)</a> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-listing">
                    <div class="inner-listing">
                        <div class="row">
                            @if($products)
                                @foreach($products as $product)
                            <div class="col-md-4 col-xs-6 mb-30">

                                <div class="product-item">
                                    <div class="product-image"> <a href="{{route('product.show', [$product->id])}}">  <img   src="/images/{{isset($product->photo)?$product->photo['file']:"has no photo"}}" alt=""> </a>
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
                                        <div class="product-item-name"> <a href="{{route('product.show', [$product->id])}}">{{$product->name}}</a> </div>
                                        <div class="price-box"> <span class="price">N{{$product->price}}</span> <del class="price old-price"></del> </div>
                                        <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                                @endforeach
                            @endif




                        <div class="row">
                            <div class="col-xs-12">
                                <div class="pagination-bar">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
