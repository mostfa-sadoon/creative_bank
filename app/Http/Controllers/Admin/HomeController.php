<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Idea;
use App\Models\User;
use App\Models\News;
use App\Models\Admin;
use Carbon\Carbon;

class HomeController extends Controller
{
    //
    public function change_lang(Request $request,$lang)
    {

        if (session()->has('lang')) {
            session()->forget('lang');
        }
        session()->put('lang', $lang);
        \App::setLocale($lang);
        return back();
    }
    public function index()
    {
        $ideacount=Idea::withTrashed()->count();
        $newscount=News::withTrashed()->count();
        $refusedidea=Idea::where('status','refused')->count();
        $acceptedidea=Idea::where('status','true')->count();
        $totaluser=User::count();
        $employees=Admin::count();
        $idea_count=[];
        for ($i = 1; $i <=12; $i++) {
            $count = Idea::withTrashed()->whereYear('created_at', '=', Carbon::yesterday())->whereMonth('created_at', '=', $i)->get()->count();
            array_push($idea_count,$count);
        };
        $idea_count = json_encode($idea_count);
        return view('dashboard',compact('ideacount','refusedidea','acceptedidea','totaluser','newscount','idea_count','employees'));
    }
}
