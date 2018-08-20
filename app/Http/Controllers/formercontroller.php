<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function getDashboard(){
        return view('dashboard');
    }

    public function postSignUp(Request $request){
       $this->validate($request, [
           'email'=>'required|email|unique:users',
           'name' => 'required|max:120',
           'password' => 'required|min:4'
       ]);
       $email=$request['email'];
       $name =$request['name'];
       $password = bcrypt($request['password']);

       $user = new User();
       $user->email= $email;
       $user->name = $name;
       $user->password = $password;
       $user->verifyToken = Str::random(40);
       $user->save();
       $this->sendVerifyToken ($user->id);
       Auth::login($user);
       return redirect()->route('sendVerifyToken');

    }

    public function postSignIn(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'password'=> 'required'
        ]);
       if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password'] ])){
           return redirect()->route('dashboard');
       }
       return redirect()->back();
    }

    public function checkEmailMessage (){
        return view('verifyemail');
    }

    public function sendVerifyToken ($id){

        $user = User::findOrfail($id);
        Mail::send('emailtemplate', ['user'=> $user], function($m) use ($user){
            $m->from('support@fiatinnovations.com', 'Sunky');
            $m->to($user->email, $user->name)->subject('Your Verification Token');
        });
    }

}
<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function getDashboard(){
        return view('dashboard');
    }

    public function postSignUp(Request $request){
       $this->validate($request, [
           'email'=>'required|email|unique:users',
           'name' => 'required|max:120',
           'password' => 'required|min:4'
       ]);
       $email=$request['email'];
       $name =$request['name'];
       $password = bcrypt($request['password']);

       $user = new User();
       $user->email= $email;
       $user->name = $name;
       $user->password = $password;
       $user->verifyToken = Str::random(40);
       $user->save();
       $this->sendVerifyToken ($user->id);
       Auth::login($user);
       return redirect()->route('sendVerifyToken');

    }

    public function postSignIn(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'password'=> 'required'
        ]);
       if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password'] ])){
           return redirect()->route('dashboard');
       }
       return redirect()->back();
    }

    public function checkEmailMessage (){
        return view('verifyemail');
    }

    public function sendVerifyToken ($id){

        $user = User::findOrfail($id);
        Mail::send('emailtemplate', ['user'=> $user], function($m) use ($user){
            $m->from('support@fiatinnovations.com', 'Sunky');
            $m->to($user->email, $user->name)->subject('Your Verification Token');
        });
    }

}
