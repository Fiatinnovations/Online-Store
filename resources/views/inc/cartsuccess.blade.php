<div style="text-align: center; ">

    @if(session()->has('Success_Message'))
        <div  class="alert alert-success no-border">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
            {{session()->get('Success_Message')}}
        </div>
    @endif

    @if(count($errors)>0)
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
            </ul>
            @endforeach
        </div>
    @endif

</div>