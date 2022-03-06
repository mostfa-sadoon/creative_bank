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
        return NewsResource::collection(News::paginate(5));
    }
    public function show(Request $request)
    {
    $lang='ar';
    $lang=$request->header('lang');
    \App::setLocale($lang);
     $id=$request->id;
     return new NewsResource(News::find($id));
     return NewsResource::collection(News::paginate(5));

    }
}
