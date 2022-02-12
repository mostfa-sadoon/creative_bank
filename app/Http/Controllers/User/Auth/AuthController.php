<?php

namespace App\Http\Controllers\User\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Field;
use App\Models\Classification;
use Session;
use Hash;

class AuthController extends Controller
{
    //
    public function index()
    {
        if(Auth::check()){
            return view('user.home.index');
        }
        return view('user.auth.login');
    }
    public function registration()
    {
        $lang=app()->getLocale();
        $fields=Field::select('name_'.$lang.' as name','id')->get();
        $classifications=Classification::select('name_'.$lang.' as name','id')->get();
        return view('user.auth.register',compact('fields','classifications'));
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }
        return redirect("login/user")->with('error', 'the email or password is not success');
    }
    public function register(Request $request)
    {
        //dd($request->clasified);
        $request->validate([
            'name' =>    'required|string|between:12,50',
            'email' =>   'required|unique:users|max:50',
            'phone'=>    'required|unique:users|min:8|max:24',
            'address'=>  'required|max:60|min:12',
            'gender'=>   'required',
            'field'=>    'required',
            'clasified'=>'required',
            'password'=> 'required|min:6|max:50|confirmed',
            'password_confirmation' => 'required|max:50|min:6',
        ]);
            $user= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'field_id'=>$request->field,
            'date_of_birth'=>$request->birthdate,
            'classified_id'=>$request->clasified,
            'password'=>Hash::make($request->password),
        ]);
          if($user->wasRecentlyCreated === true){
            Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect()->route('profile.show',Auth::user()->id);
          }
    }
    public function signout()
    {
         Session::flush();
         Auth::guard('web')->logout();
        return Redirect('login/user');
    }
}
