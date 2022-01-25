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
        $commonquestions=Commonquestion::select('question_'.$lang.' as question','answer_'.$lang.' as answer','id')->get();
        return view('user.Commonquestion.index',compact('commonquestions'));
    }
}
