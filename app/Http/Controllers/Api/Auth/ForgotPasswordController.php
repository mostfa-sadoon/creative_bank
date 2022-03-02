<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;
use Validator;
use JWTAuth;
use Mail;
use Hash;
use DB;
use Auth;

class ForgotPasswordController extends Controller
{
    //
    public function submitemail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
        ]);
        if ($validator->fails()) {
            return msg(false, $validator->messages()->first());
        } else {
            $token = random_int(100000, 999999);
           // return msg(true,$token);
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => Hash::make($token),
                'created_at' => Carbon::now()
              ]);
              Mail::send('user.auth.email', ['token' => $token], function($message) use($request){
                $message->to($request->email);
                $message->subject('Reset Password');
            });

            // $email=$request->email;
            // Mail::raw('مقراءة عنيزة الإلكترونية , كود التحقق من البريد الإلكتروني هو : ' . $token, function ($message) use ($email) {
            //     $message->subject('Reset Password');
            //     $message->from(env('MAIL_USERNAME'), 'online learning');
            //     $message->to($email);
            // });

            return msg(true,'the token send to your email check your email');
        }
    }
    public function sendtoken(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'token' => 'required',
        ]);
        if ($validator->fails()) {
            return msg(false, $validator->messages()->first());
        } else {
             $token=$request->token;
             $passwordreset=DB::table('password_resets')
             ->where([
               'email' => $request->email,
             ])->latest()
             ->first();
          //   return msg(false, $passwordreset->token);
            if (Hash::check($token,$passwordreset->token)) {
                // The passwords match...
                return msg(true,'the token is true');
            }else{
                return msg(false,'the token is false');
             }
        }
    }
    public function changepass(Request $request)
    {
        $user=User::where('email','=',$request->email);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'password'=>'required|min:6|max:50|confirmed',
            'password_confirmation' => 'required|max:50|min:6',
        ]);
        if ($validator->fails()) {
            return msg(false, $validator->messages()->first());
        } else {
            $token=$request->token;
            $passwordreset=DB::table('password_resets')->where([ 'email' => $request->email,])->latest()->first();
           if (Hash::check($token,$passwordreset->token)) {
               // The passwords match...
               $data['password']=$request->password;
               $user->update([
                    'password'=> Hash::make($data['password']),
               ]);
               DB::table('password_resets')->where(['email'=> $request->email])->latest()->delete();
               $credentials = $request->only('email', 'password');
               $token = JWTAuth::attempt($credentials);
               return response()->json([
                'status' => true,
                'msg'=>'register success',
                'token' => $token,
               ]);
           }else{
              return msg(false,'the token is false');
           }
        }
    }
}
