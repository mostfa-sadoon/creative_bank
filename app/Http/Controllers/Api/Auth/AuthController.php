<?php

namespace App\Http\Controllers\Api\Auth;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\User;
use App\Models\Field;
use App\Models\Classification;
use Illuminate\Http\Request;
use Validator;
use JWTAuth;
use Hash;
use Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50'
        ]);
         //Send failed response if request is not valid
         if ($validator->fails()) {
             return msg(false,$validator->messages()->first());
        }
        if (! $token = JWTAuth::attempt($credentials)) {
            return msg(false,'Login credentials are invalid');
        }
        else{
            return response()->json([
                'status' => true,
                'msg'=>'login success',
                'token' => $token,
            ]);
        }
    }
    public function create(Request $request){
         $lang=$request->header('lang');
         $fields=Field::select('name_'.$lang.' as name','id')->get();
         $classifications=Classification::select('name_'.$lang.' as name','id')->get();
         $data=[];
         $data['fields']=$fields;
         $data['classified']=$classifications;
         return msgdata(true,'get field successfully',$data);
    }
    public function register(Request $request)
    {
        $lang=$request->header('lang');
        if($request->header('lang')==null){
           $lang='ar';
        }
        $validator = Validator::make($request->all(), [
            'name' =>    'required|string|between:6,50',
            'email' =>   'required|unique:users|max:50',
            'phone'=>    'required|unique:users|min:8|max:24',
            'address'=>  'required|max:60|min:8',
            'gender'=>   'required',
            'field'=>    'required',
            'clasified'=>'required',
            'date_of_birth'=>'required',
            'password'=> 'required|min:6|max:50|confirmed',
            'password_confirmation' => 'required|max:50|min:6',
        ]);
        if ($validator->fails()) {
            return msg(false, $validator->messages()->first());
        }
            $user= User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'gender'=>$request->gender,
                'field_id'=>$request->field,
                'date_of_birth'=>$request->date_of_birth,
                'classified_id'=>$request->clasified,
                'lang'=>$lang,
                'password'=>Hash::make($request->password),
            ]);
            $credentials = $request->only('email', 'password');
            $token = JWTAuth::attempt($credentials);
            return response()->json([
                'status' => true,
                'msg'=>'register success',
                'token' => $token,
            ]);
         }
         public function logout()
         {
            Auth::guard('api')->logout();
            return response()->json([
                'status' => true,
                'msg'=>'logout success',
            ]);
         }

}
