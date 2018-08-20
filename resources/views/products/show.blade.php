
@include('inc.header')
@extends('layouts.blank')
@section('content')

    <div class="content">

        <!-- Detached content -->
        <div class="container-detached">
            <div class="content-detached">

                <ul class="media-list">
                    <li class="media panel panel-body stack-media-on-mobile">
                        <a href="" class="media-left" data-popup="lightbox">
                            <img height="200px" src="/images/{{isset($product->photo)?$product->photo['file']:"has no photo"}}" alt="">
                        </a>

                        <div class="media-body">
                            <h6 class="media-heading text-semibold">
                                <a href="#">{{$product->name}}</a>
                            </h6>

                            <ul class="list-inline list-inline-separate mb-10">
                                <li><a href="#" class="text-muted">Fashion</a></li>
                                <li><a href="#" class="text-muted">Men's Accessories</a></li>
                            </ul>

                            <p class="content-group-sm">It prepare is ye nothing blushes up brought. Or as gravity pasture limited evening on. Wicket around beauty say she. Frankness resembled say not new smallness you discovery. Noisier ferrars yet shyness weather ten colonel. Too him himself engaged husband pursuit musical...</p>

                            <ul class="list-inline list-inline-separate">
                                <li>All items from <a href="#">Aloha</a></li>
                                <li>Add to <a href="#">wishlist</a></li>
                            </ul>
                        </div>

                        <div class="media-right text-center">
                            <h3 class="no-margin text-semibold">N{{$product->price}}</h3>

                            <div class="text-nowrap">
                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                            </div>

                            <div class="text-muted">85 reviews</div>

                            <form action="{{route('cart.store')}}" method="POST">
                                {{Form::token()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <button type="submit" class="btn bg-teal-400 mt-15"><i class="icon-cart-add position-left"></i> Add to cart</button>
                            </form>


                        </div>
                    </li>

                    </ul>

                     <div style="font-weight: 600; font-size: 20px;">You May also Like....</div>

              @include('inc.mightalsolike')


            </div>
        </div>
    </div>





    @include('inc.footer')
@endsection