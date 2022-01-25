<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\News;

class HomeController extends Controller
{
    //
    public function index()
    {
        $lang=app()->getLocale();
        $ideas=Idea::select('id','name','img','desc')->where('status','true')->take(3)->get();
        $news=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','img','id','created_at')->take(3)->get();
        return view('user.home.index',compact('ideas','news'));
    }
}
