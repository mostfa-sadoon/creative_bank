<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth; 
use Hash;


class ProfileController extends Controller
{
    //
    public function index()
    {

        $employee=Auth::guard('Admin')->user();
      // dd($employee);
        return view('admin.profile.index',compact('employee'));
    }

    
    public function update(Request $request)
    { 
      $id=Auth::user()->id;
        $request->validate([
          'name' =>    'required|string|between:6,50',
          'email' =>   'required|max:50|unique:users,email,'.$id,
      ]);
      $admin=Admin::find($id);
      $admin->update([
           'name'=>$request->name,
           'email'=>$request->email, 
      ]);
      return redirect()->route('profile.index',$id);
    }

    public function updatePassword(Request $request){

      $data=$this->validate($request, [
        'current_password'=>'required',
        'password'=>'required|min:6|max:50|confirmed',
        'password_confirmation' => 'required|max:50|min:6',
          ]);
          $id=Auth::user()->id;
          $admin=Admin::find($id);
          if (!Hash::check($data['current_password'], $admin->password)) {
              return back()->with('error', 'The specified password does not match the database password');
          } else {
              $admin->update([
                    'password'=> bcrypt($data['password']),
              ]);
              return redirect()->route('profile.index');
          }
        
    }
}
