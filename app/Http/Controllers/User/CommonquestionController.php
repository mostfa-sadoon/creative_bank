<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commonquestion;

class CommonquestionController extends Controller
{
    //
    public function index()
    {
        $lang=app()->getLocale();
        $commonquestions=Commonquestion::get();
        return view('user.commonquestion.index',compact('commonquestions'));
    }
}
