
@include('inc.homehead')
</section>
<hr>
<!-- Main content -->
<section class="container content">
    <div class="col-md-12"></div>
    <div class="col-md-4 col-md-offset-4">
        <h2>Login to your account</h2>
        <form action="{{url('/login')}}" method="POST" role="form" class="form-horizontal">
            {{Form::token()}}

            <div class="form-group{{$errors->has('email')? 'has-error' : ''}}">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email" autofocus>
                <div>
                    @if($errors->has('email'))
                        <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                    @endif

                </div>
            </div>
            <div class="form-group{{$errors->has('password')? 'has-error': ''}}">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control" placeholder="xxxxx">
                <div>
                    @if($errors->has('password'))
                        <span class="help-block">
                        <strong>{{$error->first('password')}}</strong>
                    </span>
                    @endif
                </div>
            </div>
          {{--  <div class="form-group">
                <div class="col-md-6 col-md-offset-3" style="">
                    <div class="checkbox" >
                        <label >
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>
--}}
            <div class="row">
                <button class="btn btn-default btn-block" type="submit">Login now</button>
            </div>
        </form>
        <div class="row">
            <hr>
            <a href="password/reset.html">I forgot my password</a><br>
            <a href="register.html" class="text-center">No account? Register here.</a>
        </div>
    </div>
</section>


@include('inc.homefooter')
</html>