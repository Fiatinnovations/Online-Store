@include('inc.pageheader')


@include('inc.cartsuccess')
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
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Stock Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($wishlists)
                            @foreach($wishlists as $wishlist)
                                <div></div>
                            <tr>
                                <td>
                                    <a href="product-page.html">
                                        <div class="product-image"><img alt="Electro" src="images/1.jpg"></div>
                                    </a>
                                </td>
                                <td>
                                    <div class="product-title">
                                        <a href="{{route('product.show', [$wishlist->id])}}">{{$wishlist->name}}</a>

                                    </div>
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            <div class="base-price price-box"> <span class="price">N{{$wishlist->price}}</span> </div>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="input-box">
                                        <select data-id="100" class="quantity_cart" name="quantity_cart">
                                            <option selected="" value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </td>
                                <td><div class="total-price price-box"> <span class="price">In Stock</span> </div></td>
                                <td>



                                    <form action="{{route('remove.wishlist', ['id'=>$wishlist->rowId])}}" method="POST">
                                        {{Form::token()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit"><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></button>
                                    </form>

                                    <form action="{{route('wishlist.switchtocart', [$wishlist->rowId])}}" method="POST">
                                        {{Form::token()}}
                                        <button type="submit"> <i title="Shopping Cart" class="fa fa-shopping-cart" aria-hidden="true"></i></button>

                                    </form>

                                    <a href=""></a></td>
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
            </div>
        </div>
    </div>
</section>

