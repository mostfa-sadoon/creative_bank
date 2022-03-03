<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //
    public function index()
    {
        return News::paginate(5);
    }
    public function show(Request $request)
    {
        $lang='ar';
        $lang=$request->header('lang');
        \App::setLocale($lang);
        $id=$request->id;
       // $new=News::find($id);
        $new = new NewsResource(News::find($id));
        return msgdata(true,'return new success',$new);
    }
}
