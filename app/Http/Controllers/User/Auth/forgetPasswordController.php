<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Validator;
use Mail;
use Hash;
use DB;
use Auth;

class forgetPasswordController extends Controller
{
    //
    public function index()
    {
        return view('user.auth.reset_password.email');
    }
    public function sendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
        ]);
        $token = random_int(100000, 999999);
         DB::table('password_resets')->insert([
             'email' => $request->email,
             'token' => Hash::make($token),
             'created_at' => Carbon::now()
           ]);
           Mail::send('user.auth.email', ['token' => $token], function($message) use($request){
             $message->to($request->email);
             $message->subject('Reset Password');
         });
         $email=$request->email;
         return view('user.auth.reset_password.token',compact('email'));
    }
    // public function sendToken()
    // {
    //     return view('user.auth.reset_password.token');
    // }
    public function submitToekn(Request $request)
    {
         $number=$request->number;
         $token= implode("",$number);
        // dd($token);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
        ]);
        $email=$request->email;
             $token=$request->token;
             $passwordreset=DB::table('password_resets')
             ->where([
               'email' => $request->email,
             ])->latest()
             ->first();

            if (Hash::check($token,$passwordreset->token)) {
                // The passwords match...
                return msg(true,'the token is true');
            }else{
                $request->session()->flash('errortoken', 'The token is false');
                return view('user.auth.reset_password.token',compact('email'));
                return back()->with('', 'The token is false');
             }
    }
    public function changepassword()
    {
        return view('user.auth.reset_password.update_password');
    }
}
