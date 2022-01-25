<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //
    public function index()
    {
        $lang=app()->getLocale();
        $news=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','img','id')->paginate(20);
        return view('user.news.index',compact('news'));
    }
    public function show($id)
    {
        $lang=app()->getLocale();
        $news=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','news_'.$lang.' as news','img','id')->find($id);
        return view('user.news.show',compact('news'));
    }
}
