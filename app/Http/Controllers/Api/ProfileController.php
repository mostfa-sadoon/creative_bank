<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Field;
use App\Models\Classification;
use Auth;
use Validator;

class ProfileController extends Controller
{
    //
    public function index(Request $request)
    {
        $id=Auth::user()->id;
        $lang=$request->header('lang');
        if($request->header('lang')==null){
        $lang='ar';
        }
        $user=User::with(['classification'=>function($q)use ($lang){
            $q->select('id','name_'.$lang.' as name');
        }])->with(['field'=>function($q)use ($lang){
            $q->select('id','name_'.$lang.' as name');
        }])->find($id)->makeHidden(['email_verified_at','created_at','updated_at']);

       // $user=User::select('id','name')->with('classification')->with('field')->where('id','=',$id)->get();   
        return msgdata(true,'get profile data successfully',$user);
    }
    public function update_img(Request $request){
        $validator = Validator::make($request->all(), [
            'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:12000',
        ]);
        if ($validator->fails()) {
            return msg(false, $validator->messages()->first());
        } else {
            $img = $this->MoveImage($request->img, 'uploads/user/profile_img');
            $user=User::find(Auth::user()->id);
            $user->update([
                'img'=>$img,
            ]);
            return msg(true, "image updated success");
        }
    }

    public function update(Request $request){
        $id=Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'name' =>    'required|string|between:6,50',
            'phone'=>    'required|min:8|max:24|unique:users,phone,'.$id,
            'address'=>  'required|max:60|min:6',
            'gender'=>   'required',
            'date_of_birth'=>'required',
            'field'=>    'required',
            'clasified'=>    'required',
        ]);
        if ($validator->fails()) {
            return msg(false, $validator->messages()->first());
        } else {
           
            $user=User::find(Auth::user()->id);
            $user->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'date_of_birth'=>$request->date_of_birth,
                'gender'=>$request->gender,
                'field_id'=>$request->field,
                'classified_id'=>$request->clasified
            ]);
            return msg(true, "profile info updated success");
        }
    } 
}
