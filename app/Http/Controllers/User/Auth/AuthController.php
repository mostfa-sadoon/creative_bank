<?php

namespace App\Http\Controllers\User\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Field;
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
        return view('user.auth.register',compact('fields'));
    }
    public function login(Request $request)
    {
       // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')
                        ->withSuccess('Signed in');
        }
        return redirect("login/user")->withSuccess('Login details are not valid');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' =>    'required|string|between:12,50',
            'email' =>   'required|unique:users|max:50',
            'phone'=>    'required|unique:users|min:8|max:24',
            'address'=>  'required|max:60|min:12',
            'gender'=>   'required',
            'field'=>    'required',
            'password'=> 'required|min:6|max:50|confirmed',
            'password_confirmation' => 'required|max:50|min:6',
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'field_id'=>$request->field,
            'date_of_birth'=>$request->birthdate,
            'password'=>Hash::make($request->password),
        ]);
       return redirect()->route('home');
    }
    public function signout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login/user');
    }
}
