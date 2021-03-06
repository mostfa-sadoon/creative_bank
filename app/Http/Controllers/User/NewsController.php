<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $news=News::paginate(10);
       // dd($news);
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
        $relatednews=News::select('id','img','header_ar','header_en')->where('category_id','=',$news->category_id)->where('id','!=',$news->id)->take(2)->latest()->get();
        return view('user.news.show',compact('news','relatednews'));
    }
}
