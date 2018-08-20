@include('inc.header')


@extends('layouts.blank')

@section('content')

@include('errors.validationError')

    <div class="content" >

        <!-- Form horizontal -->


        <div class="panel-body">


            <div class="content">

                <!-- Form horizontal -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title" style="text-align: center">Create Product</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="form-horizontal form-bordered">


                            {!! Form::open(['method'=>'POST','action'=>'ProductsController@store','files'=>true] ,['class'=>'form-horizontal'])!!}

                            <div class="form-group">
                                {!! Form::label('name','Product Name',['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-10">{!! Form::text('name',null,['class'=>'form-control']) !!}</div>

                            </div>

                           {{-- <div class="form-group ">
                                {!! Form::label('category_id','Category:',['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-10">{!! Form::select('category_id',$categories,'3',['class'=>'form-control']) !!}</div>

                            </div>--}}

                            {{--<div class="form-group ">
                                {!! Form::label('brand_id','Brand:',['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-10">{!! Form::select('brand_id',$brands,'3',['class'=>'form-control']) !!}</div>

                            </div>--}}

                            <div class="form-group">
                                {!! Form::label('price','Product Price',['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-10">{!! Form::text('price',null,['class'=>'form-control']) !!}</div>

                            </div>



                            <div class="form-group">
                                {!! Form::label('description','Describe Product',['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-10">{!! Form::textarea('description',null,['class'=>'form-control','rows'=>5 ,'cols'=>5]) !!}</div>

                            </div>


                            <div class="form-group">
                                {!! Form::label('photo_id','ScreenShot:',['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-10">{!! Form::file('photo_id', ['class'=>'form-control']) !!}</div>
                            </div>


                            <div class="text-right">

                                {!! Form::submit('Create product',['class'=>'btn btn-primary ']) !!}

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div></div>
    {!! Form::close() !!}


    @include('inc.footer')
@endsection