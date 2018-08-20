@include('inc.homehead')
</section>
<section id="hero" class="hero-section top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="hero-content">
                    <h1 class="hero-title">Shopping Holiday <br> Collection</h1>
                    <p class="hero-text">Welcome to this Amazing Store, Built with Laravel 5.2 <strong class="text-danger">YIPEE!</strong></p>
                    <a class="btn btn-succes btn-hero" href="{{route('products.index')}}" target="_blank" role="button">SHOP NOW <i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<section class="new-product t100 home">
    <div class="container">
        <div class="section-title b50">
            <h2>Newest Products</h2>
        </div>
        <ul class="row text-center list-unstyled">
            @foreach($products as $product)
            <li class="col-md-3 col-sm-6 col-xs-12 product-list">
                <div class="single-product">
                    <div class="product">
                        <div class="product-overlay">
                            <div class="vcenter">
                                <div class="centrize">
                                    <ul class="list-unstyled list-group">
                                        <li>
                                            <form action="{{route('cart.store')}}" class="form-inline" method="POST">
                                              {{Form::token()}}
                                                <input type="hidden" name="id" value="{{$product->id}}" />
                                                <input type="hidden" name="name" value="{{$product->name}}">
                                                <input type="hidden" name="price" value="{{$product->price}}">
                                                <button id="add-to-cart-btn" type="submit" class="btn btn-warning" data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i> Add to cart</button>
                                            </form>
                                        </li>
                                        <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_25"> <i class="fa fa-eye"></i> Quick View</button>


                                        <li>  <a class="btn btn-default product-btn" href="{{route('frontendproduct.show', [$product->id])}}"> <i class="fa fa-link"></i> Go to product</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="/images/{{isset($product->photo)? $product->photo['file']:''}}" alt="Skate shoes" class="img-bordered img-responsive">
                    </div>

                    <div class="product-text">
                        <h4>{{$product->name}}</h4>
                        <p>N{{$product->price}}</p>
                    </div>
                    <!-- Modal -->

                </div>
            </li>
                @endforeach



        </ul>
        <div id="browse-all-btn"> <a class="btn btn-default browse-all-btn" href="category/shoes.html" role="button">browse all items</a></div>
    </div>
</section>
<hr>
<div class="container">
    <div class="section-title b100">
        <h2>Featured Products</h2>
    </div>
    <ul class="row text-center list-unstyled">
        <li class="col-md-3 col-sm-6 col-xs-12 product-list">
            <div class="single-product">
                <div class="product">
                    <div class="product-overlay">
                        <div class="vcenter">
                            <div class="centrize">
                                <ul class="list-unstyled list-group">
                                    <li>
                                        <form action="{{route('cart.store')}}" class="form-inline" method="POST">
                                                      {{Form::token()}}
                                            <input type="hidden" name="id" value="{{$product->id}}" />
                                            <input type="hidden" name="name" value="{{$product->name}}" />
                                            <input type="hidden" name="price" value="{{$product->price}}">
                                            <button id="add-to-cart-btn" type="submit" class="btn btn-warning"  > <i class="fa fa-cart-plus"></i> Add to cart</button>
                                        </form>
                                    </li>
                                    <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_11"> <i class="fa fa-eye"></i> Quick View</button>
                                    <li>  <a class="btn btn-default product-btn" href="teal-shirt.html"> <i class="fa fa-link"></i> Go to product</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="{{ URL::asset('assets2/storage/products/0e6Gwi4PhTXvz6UDjFIkfxeG4.png') }}" alt="Teal shirt" class="img-bordered img-responsive">
                </div>

                <div class="product-text">
                    <h4>Teal shirt</h4>
                    <p>Php 150.00</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal_11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul id="thumbnails" class="col-md-4 list-unstyled">
                                        <li>
                                            <a href="javascript: void(0)">
                                                <img class="img-responsive img-thumbnail"
                                                     src="{{ URL::asset('assets2/storage/products/0e6Gwi4PhTXvz6UDjFIkfxeG4.png') }}"
                                                     alt="Teal shirt" />
                                            </a>
                                        </li>
                                    </ul>
                                    <figure class="text-center product-cover-wrap col-md-8">
                                        <img id="main-image" class="product-cover img-responsive"
                                             src="{{ URL::asset('assets2/storage/products/0e6Gwi4PhTXvz6UDjFIkfxeG46cc5.png?w=400') }}"
                                             data-zoom="{{ URL::asset('assets2/storage/products/0e6Gwi4PhTXvz6UDjFIkfxeG4bcc0.png?w=1200') }}">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-description">
                                        <h1>Teal shirt
                                            <small>Php 150.00</small>
                                        </h1>
                                        <div class="description">Illo iste sit eos quos quasi sit necessitatibus quibusdam. Voluptate reiciendis beatae voluptatibus delectus possimus. Dolore non magnam ipsa et aut. Reprehenderit omnis impedit provident qui quo.</div>
                                        <div class="excerpt">
                                            <hr>Illo iste sit eos quos quasi sit necessitatibus quibusdam. Voluptate reiciendis beatae voluptatibus ...</div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                                    <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control"
                                                               name="quantity"
                                                               id="quantity"
                                                               placeholder="Quantity"
                                                               value="" />
                                                        <input type="hidden" name="product" value="11" />
                                                    </div>
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to cart
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12 product-list">
            <div class="single-product">
                <div class="product">
                    <div class="product-overlay">
                        <div class="vcenter">
                            <div class="centrize">
                                <ul class="list-unstyled list-group">
                                    <li>
                                        <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                            <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product" value="13">
                                            <button id="add-to-cart-btn" type="submit" class="btn btn-warning" data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i> Add to cart</button>
                                        </form>
                                    </li>
                                    <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_13"> <i class="fa fa-eye"></i> Quick View</button>
                                    <li>  <a class="btn btn-default product-btn" href="blue-shirt.html"> <i class="fa fa-link"></i> Go to product</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="{{ URL::asset('assets2/storage/products/H6VdCSzYLWD2zpE1RVEVQ2JtP.png') }}" alt="Blue shirt" class="img-bordered img-responsive">
                </div>

                <div class="product-text">
                    <h4>Blue shirt</h4>
                    <p>Php 150.00</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal_13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul id="thumbnails" class="col-md-4 list-unstyled">
                                        <li>
                                            <a href="javascript: void(0)">
                                                <img class="img-responsive img-thumbnail"
                                                     src="{{ URL::asset('assets2/storage/products/H6VdCSzYLWD2zpE1RVEVQ2JtP.png') }}"
                                                     alt="Blue shirt" />
                                            </a>
                                        </li>
                                    </ul>
                                    <figure class="text-center product-cover-wrap col-md-8">
                                        <img id="main-image" class="product-cover img-responsive"
                                             src="{{ URL::asset('assets2/storage/products/H6VdCSzYLWD2zpE1RVEVQ2JtP6cc5.png?w=400') }}"
                                             data-zoom="{{ URL::asset('assets2/storage/products/H6VdCSzYLWD2zpE1RVEVQ2JtPbcc0.png?w=1200') }}">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-description">
                                        <h1>Blue shirt
                                            <small>Php 150.00</small>
                                        </h1>
                                        <div class="description">Ut est omnis veritatis ut perspiciatis voluptatem. Quia aperiam dolorem sint dolorem optio consequatur laboriosam. Suscipit id perferendis eius nostrum. Totam adipisci repellendus odit non. Ea placeat placeat et molestiae vitae eaque.</div>
                                        <div class="excerpt">
                                            <hr>Ut est omnis veritatis ut perspiciatis voluptatem. Quia aperiam dolorem sint dolorem optio consequat ...</div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                                    <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control"
                                                               name="quantity"
                                                               id="quantity"
                                                               placeholder="Quantity"
                                                               value="" />
                                                        <input type="hidden" name="product" value="13" />
                                                    </div>
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to cart
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12 product-list">
            <div class="single-product">
                <div class="product">
                    <div class="product-overlay">
                        <div class="vcenter">
                            <div class="centrize">
                                <ul class="list-unstyled list-group">
                                    <li>
                                        <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                            <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product" value="28">
                                            <button id="add-to-cart-btn" type="submit" class="btn btn-warning" data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i> Add to cart</button>
                                        </form>
                                    </li>
                                    <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_28"> <i class="fa fa-eye"></i> Quick View</button>
                                    <li>  <a class="btn btn-default product-btn" href="purple-shirt.html"> <i class="fa fa-link"></i> Go to product</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="{{ URL::asset('assets2/storage/products/2szkhQxyXFU8d3tTi0Ew4jFIx.png') }}" alt="Purple shirt" class="img-bordered img-responsive">
                </div>

                <div class="product-text">
                    <h4>Purple shirt</h4>
                    <p>Php 150.00</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal_28" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul id="thumbnails" class="col-md-4 list-unstyled">
                                        <li>
                                            <a href="javascript: void(0)">
                                                <img class="img-responsive img-thumbnail"
                                                     src="{{ URL::asset('assets2/storage/products/2szkhQxyXFU8d3tTi0Ew4jFIx.png') }}"
                                                     alt="Purple shirt" />
                                            </a>
                                        </li>
                                    </ul>
                                    <figure class="text-center product-cover-wrap col-md-8">
                                        <img id="main-image" class="product-cover img-responsive"
                                             src="{{ URL::asset('assets2/storage/products/2szkhQxyXFU8d3tTi0Ew4jFIx6cc5.png?w=400') }}"
                                             data-zoom="{{ URL::asset('assets2/storage/products/2szkhQxyXFU8d3tTi0Ew4jFIxbcc0.png?w=1200') }}">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-description">
                                        <h1>Purple shirt
                                            <small>Php 150.00</small>
                                        </h1>
                                        <div class="description">Consequatur quia placeat quaerat placeat id sint animi. Aliquid ut qui suscipit vero odit perspiciatis. Earum qui atque quam.</div>
                                        <div class="excerpt">
                                            <hr>Consequatur quia placeat quaerat placeat id sint animi. Aliquid ut qui suscipit vero odit perspiciat ...</div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                                    <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control"
                                                               name="quantity"
                                                               id="quantity"
                                                               placeholder="Quantity"
                                                               value="" />
                                                        <input type="hidden" name="product" value="28" />
                                                    </div>
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to cart
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12 product-list">
            <div class="single-product">
                <div class="product">
                    <div class="product-overlay">
                        <div class="vcenter">
                            <div class="centrize">
                                <ul class="list-unstyled list-group">
                                    <li>
                                        <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                            <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product" value="27">
                                            <button id="add-to-cart-btn" type="submit" class="btn btn-warning" data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i> Add to cart</button>
                                        </form>
                                    </li>
                                    <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_27"> <i class="fa fa-eye"></i> Quick View</button>
                                    <li>  <a class="btn btn-default product-btn" href="red-shirt.html"> <i class="fa fa-link"></i> Go to product</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="{{ URL::asset('assets2/storage/products/UKKTQ71wHR5rtkqGXCqOz3QNk.png') }}" alt="Red shirt" class="img-bordered img-responsive">
                </div>

                <div class="product-text">
                    <h4>Red shirt</h4>
                    <p>Php 150.00</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal_27" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul id="thumbnails" class="col-md-4 list-unstyled">
                                        <li>
                                            <a href="javascript: void(0)">
                                                <img class="img-responsive img-thumbnail"
                                                     src="{{ URL::asset('assets2/storage/products/UKKTQ71wHR5rtkqGXCqOz3QNk.png') }}"
                                                     alt="Red shirt" />
                                            </a>
                                        </li>
                                    </ul>
                                    <figure class="text-center product-cover-wrap col-md-8">
                                        <img id="main-image" class="product-cover img-responsive"
                                             src="{{ URL::asset('assets2/storage/products/UKKTQ71wHR5rtkqGXCqOz3QNk6cc5.png?w=400') }}"
                                             data-zoom="{{ URL::asset('assets2/storage/products/UKKTQ71wHR5rtkqGXCqOz3QNkbcc0.png?w=1200') }}">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-description">
                                        <h1>Red shirt
                                            <small>Php 150.00</small>
                                        </h1>
                                        <div class="description">Consequatur quia placeat quaerat placeat id sint animi. Aliquid ut qui suscipit vero odit perspiciatis. Earum qui atque quam.</div>
                                        <div class="excerpt">
                                            <hr>Consequatur quia placeat quaerat placeat id sint animi. Aliquid ut qui suscipit vero odit perspiciat ...</div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                                    <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control"
                                                               name="quantity"
                                                               id="quantity"
                                                               placeholder="Quantity"
                                                               value="" />
                                                        <input type="hidden" name="product" value="27" />
                                                    </div>
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to cart
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12 product-list">
            <div class="single-product">
                <div class="product">
                    <div class="product-overlay">
                        <div class="vcenter">
                            <div class="centrize">
                                <ul class="list-unstyled list-group">
                                    <li>
                                        <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                            <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product" value="26">
                                            <button id="add-to-cart-btn" type="submit" class="btn btn-warning" data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i> Add to cart</button>
                                        </form>
                                    </li>
                                    <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_26"> <i class="fa fa-eye"></i> Quick View</button>
                                    <li>  <a class="btn btn-default product-btn" href="spring-fall-leather-jacker.html"> <i class="fa fa-link"></i> Go to product</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="{{ URL::asset('assets2/storage/products/WJkHC2bbbBgle95Tc3j2byoud.png') }}" alt="Spring - Fall Leather Jacker" class="img-bordered img-responsive">
                </div>

                <div class="product-text">
                    <h4>Spring - Fall Leather Jacker</h4>
                    <p>Php 150.00</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal_26" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul id="thumbnails" class="col-md-4 list-unstyled">
                                        <li>
                                            <a href="javascript: void(0)">
                                                <img class="img-responsive img-thumbnail"
                                                     src="{{ URL::asset('assets2/storage/products/WJkHC2bbbBgle95Tc3j2byoud.png') }}"
                                                     alt="Spring - Fall Leather Jacker" />
                                            </a>
                                        </li>
                                    </ul>
                                    <figure class="text-center product-cover-wrap col-md-8">
                                        <img id="main-image" class="product-cover img-responsive"
                                             src="{{ URL::asset('assets2/storage/products/WJkHC2bbbBgle95Tc3j2byoud6cc5.png?w=400') }}"
                                             data-zoom="{{ URL::asset('assets2/storage/products/WJkHC2bbbBgle95Tc3j2byoudbcc0.png?w=1200') }}">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-description">
                                        <h1>Spring - Fall Leather Jacker
                                            <small>Php 150.00</small>
                                        </h1>
                                        <div class="description">Iste ipsa et nam consequuntur animi numquam recusandae. Accusamus fugiat nisi error quibusdam quia natus dolor tempore. Velit similique laboriosam qui consequatur eum in magni. Qui placeat nihil deserunt aut earum.</div>
                                        <div class="excerpt">
                                            <hr>Iste ipsa et nam consequuntur animi numquam recusandae. Accusamus fugiat nisi error quibusdam quia n ...</div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                                    <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control"
                                                               name="quantity"
                                                               id="quantity"
                                                               placeholder="Quantity"
                                                               value="" />
                                                        <input type="hidden" name="product" value="26" />
                                                    </div>
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to cart
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12 product-list">
            <div class="single-product">
                <div class="product">
                    <div class="product-overlay">
                        <div class="vcenter">
                            <div class="centrize">
                                <ul class="list-unstyled list-group">
                                    <li>
                                        <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                            <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product" value="24">
                                            <button id="add-to-cart-btn" type="submit" class="btn btn-warning" data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i> Add to cart</button>
                                        </form>
                                    </li>
                                    <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_24"> <i class="fa fa-eye"></i> Quick View</button>
                                    <li>  <a class="btn btn-default product-btn" href="red-light-shoes.html"> <i class="fa fa-link"></i> Go to product</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="{{ URL::asset('assets2/storage/products/Ein1of321Pse0GyPaI8IPwfwS.png') }}" alt="Red light shoes" class="img-bordered img-responsive">
                </div>

                <div class="product-text">
                    <h4>Red light shoes</h4>
                    <p>Php 150.00</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal_24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul id="thumbnails" class="col-md-4 list-unstyled">
                                        <li>
                                            <a href="javascript: void(0)">
                                                <img class="img-responsive img-thumbnail"
                                                     src="{{ URL::asset('assets2/storage/products/Ein1of321Pse0GyPaI8IPwfwS.png') }}"
                                                     alt="Red light shoes" />
                                            </a>
                                        </li>
                                    </ul>
                                    <figure class="text-center product-cover-wrap col-md-8">
                                        <img id="main-image" class="product-cover img-responsive"
                                             src="{{ URL::asset('assets2/storage/products/Ein1of321Pse0GyPaI8IPwfwS6cc5.png?w=400') }}"
                                             data-zoom="{{ URL::asset('assets2/storage/products/Ein1of321Pse0GyPaI8IPwfwSbcc0.png?w=1200') }}">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-description">
                                        <h1>Red light shoes
                                            <small>Php 150.00</small>
                                        </h1>
                                        <div class="description">Ea fuga sequi facere cupiditate. Ratione atque dolorem aut explicabo quae iusto. Tempora veritatis sint est quia hic et. Et dolorem quia enim sint.</div>
                                        <div class="excerpt">
                                            <hr>Ea fuga sequi facere cupiditate. Ratione atque dolorem aut explicabo quae iusto. Tempora veritatis s ...</div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                                    <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control"
                                                               name="quantity"
                                                               id="quantity"
                                                               placeholder="Quantity"
                                                               value="" />
                                                        <input type="hidden" name="product" value="24" />
                                                    </div>
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to cart
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12 product-list">
            <div class="single-product">
                <div class="product">
                    <div class="product-overlay">
                        <div class="vcenter">
                            <div class="centrize">
                                <ul class="list-unstyled list-group">
                                    <li>
                                        <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                            <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product" value="20">
                                            <button id="add-to-cart-btn" type="submit" class="btn btn-warning" data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i> Add to cart</button>
                                        </form>
                                    </li>
                                    <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_20"> <i class="fa fa-eye"></i> Quick View</button>
                                    <li>  <a class="btn btn-default product-btn" href="stripe-little-fella.html"> <i class="fa fa-link"></i> Go to product</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="{{ URL::asset('assets2/storage/products/GF2TFOHRoSWWymTJjIYQreikL.png') }}" alt="Stripe little fella" class="img-bordered img-responsive">
                </div>

                <div class="product-text">
                    <h4>Stripe little fella</h4>
                    <p>Php 150.00</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal_20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul id="thumbnails" class="col-md-4 list-unstyled">
                                        <li>
                                            <a href="javascript: void(0)">
                                                <img class="img-responsive img-thumbnail"
                                                     src="{{ URL::asset('assets2/storage/products/GF2TFOHRoSWWymTJjIYQreikL.png') }}"
                                                     alt="Stripe little fella" />
                                            </a>
                                        </li>
                                    </ul>
                                    <figure class="text-center product-cover-wrap col-md-8">
                                        <img id="main-image" class="product-cover img-responsive"
                                             src="{{ URL::asset('assets2/storage/products/GF2TFOHRoSWWymTJjIYQreikL6cc5.png?w=400') }}"
                                             data-zoom="{{ URL::asset('assets2/storage/products/GF2TFOHRoSWWymTJjIYQreikLbcc0.png?w=1200') }}">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-description">
                                        <h1>Stripe little fella
                                            <small>Php 150.00</small>
                                        </h1>
                                        <div class="description">Aspernatur tempore inventore mollitia. Ipsum enim dolorem velit deserunt voluptas maiores. Et expedita accusantium id voluptatem fugiat est.</div>
                                        <div class="excerpt">
                                            <hr>Aspernatur tempore inventore mollitia. Ipsum enim dolorem velit deserunt voluptas maiores. Et expedi ...</div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                                    <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control"
                                                               name="quantity"
                                                               id="quantity"
                                                               placeholder="Quantity"
                                                               value="" />
                                                        <input type="hidden" name="product" value="20" />
                                                    </div>
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to cart
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-md-3 col-sm-6 col-xs-12 product-list">
            <div class="single-product">
                <div class="product">
                    <div class="product-overlay">
                        <div class="vcenter">
                            <div class="centrize">
                                <ul class="list-unstyled list-group">
                                    <li>
                                        <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                            <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product" value="25">
                                            <button id="add-to-cart-btn" type="submit" class="btn btn-warning" data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i> Add to cart</button>
                                        </form>
                                    </li>
                                    <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_25"> <i class="fa fa-eye"></i> Quick View</button>
                                    <li>  <a class="btn btn-default product-btn" href="skate-shoes.html"> <i class="fa fa-link"></i> Go to product</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="{{ URL::asset('assets2/storage/products/5ByVAakJZxeaDCpFAp9IWcU3X.jpg') }}" alt="Skate shoes" class="img-bordered img-responsive">
                </div>

                <div class="product-text">
                    <h4>Skate shoes</h4>
                    <p>Php 150.00</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal_25" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul id="thumbnails" class="col-md-4 list-unstyled">
                                        <li>
                                            <a href="javascript: void(0)">
                                                <img class="img-responsive img-thumbnail"
                                                     src="{{ URL::asset('assets2/storage/products/5ByVAakJZxeaDCpFAp9IWcU3X.jpg') }}"
                                                     alt="Skate shoes" />
                                            </a>
                                        </li>
                                    </ul>
                                    <figure class="text-center product-cover-wrap col-md-8">
                                        <img id="main-image" class="product-cover img-responsive"
                                             src="{{ URL::asset('assets2/storage/products/5ByVAakJZxeaDCpFAp9IWcU3X6cc5.jpg?w=400') }}"
                                             data-zoom="{{ URL::asset('assets2/storage/products/5ByVAakJZxeaDCpFAp9IWcU3Xbcc0.jpg?w=1200') }}">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-description">
                                        <h1>Skate shoes
                                            <small>Php 150.00</small>
                                        </h1>
                                        <div class="description">Molestias dolor esse molestias dolor. Hic dolores nihil sint exercitationem iusto totam. Deserunt qui laboriosam corrupti et dolores distinctio.</div>
                                        <div class="excerpt">
                                            <hr>Molestias dolor esse molestias dolor. Hic dolores nihil sint exercitationem iusto totam. Deserunt qu ...</div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="https://shop.jsdecena.me/cart" class="form-inline" method="post">
                                                    <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control"
                                                               name="quantity"
                                                               id="quantity"
                                                               placeholder="Quantity"
                                                               value="" />
                                                        <input type="hidden" name="product" value="25" />
                                                    </div>
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to cart
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div id="browse-all-btn"> <a class="btn btn-default browse-all-btn" href="category/shirts.html" role="button">browse all items</a></div>
</div>
<hr />
<section class="subscribe-section t100">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>Join 100,000 people already collaborating </h3>
                <p>This e-commerce app is licenced with MIT and can be forked in Github <i class="fa fa-heart text-danger"></i><br />So what are you waiting for? Set an online shop <strong>NOW!</strong></p>
                <form action="https://shop.jsdecena.me/mailchimp" class="form-inline form-field-section" method="post">
                    <input type="hidden" name="_token" value="b0nuM15AjlckoQAhQrDMwPwXDgb7EMfIQVLytax0">
                    <input type="email" name="email" class="newsletter-input subscribe-form-control" placeholder="Your email address" value="">
                    <button type="submit" class="btn btn-subscribe">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
@include('inc.homefooter')