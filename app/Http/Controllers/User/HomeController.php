<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Idea;

class HomeController extends Controller
{
    //
    public function index()
    {
        $ideas=Idea::select('id','name','img','desc')->where('status','true')->take(9)->get();
        return view('user.home.index',compact('ideas'));
    }
}
