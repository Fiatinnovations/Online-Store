<div class="container">
    @if(isset($searchbykeyword))
        {{--<p> The Search results for your query <b> {{ $keyword }} </b> are :</p>--}}
        <h2>Yipee!!! I am working!!!</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($searchbykeyword as $product)
                <tr>
                    <td>{{$product->price}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>




{{--
<div style="margin-top: 20px; " class="row">



    <!-- Grid -->




    @foreach($searchbykeyword as $product)


        <div class="col-lg-3 col-sm-6">
            <div class="panel">
                <div class="panel-body">
                    <div  class="thumb thumb-fixed">

                        <img   src="/images/{{isset($product->photo)?$product->photo['file']:"has no photo"}}" alt="">

                    </div>
                </div>

                <div class="panel-body panel-body-accent text-center">


                    <a href="{{route('products.search')}}"><h3 class="no-margin text-semibold">{{$product->name}}</h3></a>




                    <div style="font-size:20px" class="text-semibold ">N{{$product->price}}</div>



                </div>

            </div>

        </div>
    @endforeach







</div>--}}
