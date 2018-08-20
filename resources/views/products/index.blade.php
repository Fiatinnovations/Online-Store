@include('inc.pageheader')
@extends('layouts.shop')
@section('content')





  {{--  <div class="content">

        <!-- Detached content -->

        <div class="container-detached">
            <div class="content-detached">
                <div class="row">



                <!-- Grid -->
                @if($products)
                    @foreach($products as $product)


                        <div class="col-lg-3 col-sm-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div  class="thumb thumb-fixed">

                                      <img   src="/images/{{isset($product->photo)?$product->photo['file']:"has no photo"}}" alt="">

                                    </div>
                                </div>

                                <div class="panel-body panel-body-accent text-center">


                                    <a href="{{route('product.show',['id'=>$product->id])}}"><h3 class="no-margin text-semibold">{{$product->name}}</h3></a>
                                    <a href="#" class="text-semibold">{{str_limit($product->description, 20)}}</a>



                                    <div style="font-size:20px" class="text-semibold ">N{{$product->price}}</div>

                                    <form action="{{route('cart.store')}}" method="POST">
                                        {{Form::token()}}
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <button type="submit" class="btn bg-teal-400 mt-15"><i class="icon-cart-add position-left"></i> Add to cart</button>
                                    </form>


                                </div>

                            </div>

                        </div>
                        @endforeach
                    @endif
            </div>
            </div>


            <div></div>






        </div>






    </div>
    </div>


    </div>






    </div>
    </div>
    </div>
    </div>








    </div>
    </div>
    </div>
    <!-- /grid -->



    </div>
    </div>
    <!-- /detached content -->


    <!-- Detached sidebar -->
    <div class="sidebar-detached">
        <div class="sidebar sidebar-default sidebar-separate">
            <div class="sidebar-content">

                <!-- Categories -->




                </form>
            </div>
        </div>
        <!-- /filter -->

    </div>
    </div>
    </div>
    <!-- /detached sidebar -->


    <!-- Footer -->

    <!-- /footer -->

    </div>
    <!-- /content area -->--}}





    @include('inc.footer')
@endsection