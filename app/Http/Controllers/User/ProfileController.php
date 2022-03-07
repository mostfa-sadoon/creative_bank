<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Field;
use App\Models\Classification;
use Auth;
use Hash;

class ProfileController extends Controller
{
    //
    public function index($id)
    {
         $user=User::find($id);
         $lang=app()->getLocale();
      //   dd($user->field->id);
         $field=Field::select('name_'.$lang.' as name')->find($user->field->id);
         $classification=Classification::select('name_'.$lang.' as name')->find($user->field->id);
         return view('user.profile.index',compact('user','field','classification'));
    }
    public function edit($id)
    {
         $user=User::find($id);
         $lang=app()->getLocale();
         $field=Field::select('name_'.$lang.' as name')->find($user->field->id);
         $classification=Classification::select('name_'.$lang.' as name')->find($user->field->id);
         $fields=Field::select('name_'.$lang.' as name','id')->get();
         $classifications=Classification::select('name_'.$lang.' as name','id')->get();
         return view('user.profile.edite',compact('user','field','fields','classifications','classification'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
     $id=Auth::user()->id;
        $request->validate([
          'name' =>    'required|string|between:6,50',
          'email' =>   'required|max:50|unique:users,email,'.$id,
          'phone'=>    'required|min:8|max:24|unique:users,phone,'.$id,
          'address'=>  'required|max:60|min:6',
          'gender'=>   'required',
          'date_of_birth'=>'required',
          'field'=>    'required',
          'clasified'=>    'required',
      ]);
      if($request->hasfile('img'))
      {
          $request->validate([
               'img'=>'image|mimes:jpg,png,jpeg,gif,svg|max:10240',
          ]);
          $img = $this->MoveImage($request->img, 'uploads/user/profile_img');
          $user=User::find($id);
          $user->update([
               'name'=>$request->name,
               'email'=>$request->email,
               'img'=>$img,
               'phone'=>$request->phone,
               'address'=>$request->address,
               'gender'=>$request->gender,
               'date_of_birth'=>$request->date_of_birth,
               'field_id'=>$request->field,
               'classified_id'=>$request->clasified
          ]);
          return redirect()->route('profile.show',$id);
      }else{
          $request->validate([
               'img'=>'image|mimes:jpg,png,jpeg,gif,svg|max:10240',
          ]);
          $user=User::find($id);
          $user->update([
               'name'=>$request->name,
               'email'=>$request->email,
               'phone'=>$request->phone,
               'address'=>$request->address,
               'date_of_birth'=>$request->date_of_birth,
               'gender'=>$request->gender,
               'field_id'=>$request->field,
               'classified_id'=>$request->clasified
          ]);
          return redirect()->route('profile.show',$id);
      }
    }
    public function editpassword()
    {
         return view('user.profile.edituserpass');
    }
    public function updatepassword(Request $request)
    {
         $data=$this->validate($request, [
               'old_password'=>'required',
               'password'=>'required|min:6|max:50|confirmed',
               'password_confirmation' => 'required|max:50|min:6',
          ]);
          $id=Auth::user()->id;

          dd($id);
          $user=User::find($id);
          if (!Hash::check($data['old_password'], $user->password)) {
               return back()->with('error', 'The specified password does not match the database password');
           } else {
               $user->update([
                    'password'=> bcrypt($data['password']),
               ]);
               return redirect()->route('profile.show',$id);
           }
    }
}
