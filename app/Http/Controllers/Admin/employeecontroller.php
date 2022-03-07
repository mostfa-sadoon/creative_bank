<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;

class employeecontroller extends Controller
{
    //
    public function index()
    {
        $employees=Admin::get();
       return view('admin.employee.index',compact('employees'));
    }
    public function create()
    {
        return view('admin.employee.create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
        $data = $this->validate(\request(),
        [
            'name' =>    'required|string|between:6,50',
            'email' =>   'required|unique:admins|max:50',
            'password'=> 'required|min:6|max:50|confirmed',
            'password_confirmation' => 'required|max:50|min:6',
        ]);
          $role="writer";
        if($request->role=="option1") {
            $role="Super-Admin";
        }
        $data['password']=Hash::make($request->password);
        $admin=Admin::create($data);
        $admin->assignRole($role);
        return redirect()->route('employees');


    }
    public function edit($id)
    {
       
        $employee=Admin::find($id);
        $role=$employee->getRoleNames();
        return view('admin.employee.edit',compact('employee','role'));
    }
    public function update(Request $request)
    {
        $data = $this->validate(\request(),
        [
            'name' =>    'required|string|between:12,50',
            'email' =>   'required|unique:admins|max:50',
            'password'=> 'required|min:6|max:50|confirmed',
            'password_confirmation' => 'required|max:50|min:6',
        ]);
          $role="writer";
        if($request->role=="option1") {
            $role="Super-Admin";
        }
        $data['password']=Hash::make($request->password);
        $employee=Admin::findorfail($request->id);
        $employee->update($data);
        $employee->assignRole($role);
        return redirect()->route('employees');

    }
    public function delete($id)
    {
       $admin=Admin::findorfail($id);
       $admin->delete();
       return redirect()->back();
    }
}
