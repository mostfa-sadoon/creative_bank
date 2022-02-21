<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    //
    public function index()
    {
       $users=User::select('id','name','img','email','phone','created_at')->orderBy('created_at', 'desc')->paginate(50);
       return view('admin.users.index',compact('users'));
    }
}
