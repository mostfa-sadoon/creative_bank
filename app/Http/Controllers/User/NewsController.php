<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewCategory;

class NewsController extends Controller
{
    //
    public function index()
    {
        $lang=app()->getLocale();
        $NewCategories=NewCategory::get();
        $news=News::paginate(20);
        return view('user.news.index',compact('news','NewCategories'));
    }

    public function newsCategory($category)
    {
        $lang=app()->getLocale();
        $NewCategories=NewCategory::get();
        $news=News::where('category_id','=',$category)->paginate(20);
        return view('user.news.index',compact('news','NewCategories'));
    }

    public function show($id)
    {
        $lang=app()->getLocale();
        $news=News::find($id);
        return view('user.news.show',compact('news'));
    }
}
