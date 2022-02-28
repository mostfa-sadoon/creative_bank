<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //
    public function index()
    {
        return News::paginate(5);
    }

    public function show()
    {

    }
}
