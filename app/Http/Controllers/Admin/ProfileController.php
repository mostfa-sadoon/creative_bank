<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

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
       
    }
}
