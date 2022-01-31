<?php

namespace App\Http\Controllers\Admin\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
use Hash;
class CustomAuthController extends Controller
{
    //
    public function index()
    { 

        if(Auth::guard('Admin')->check()){
            return redirect("dashboard");
        }
        return view('admin.custom.login');
    }  
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('Admin')->attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function registration()
    {
        if(Auth::guard('Admin')->check()){
            return redirect("dashboard");
        }
        return redirect("dashboard");
    }
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);      
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
    public function create(array $data)
    {
      return Admin::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    // public function dashboard()
    // {
    //     if(Auth::guard('Admin')->check()){
    //         return view('dashboard');
    //     }else{
    //         return view('auth.login');
    //     }
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }
    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
