<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\News;
use App\Models\Vote;

class HomeController extends Controller
{
    //
    public function index()
    {
        $lang=app()->getLocale();
        $ideas=Idea::select('id','name','img','desc')->where('status','true')->orderBy('created_at', 'desc')->take(3)->get();
        $news=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','img','id','created_at')->take(3)->get();
        $votes=Vote::with('voteideas')->where('status','true')->where('end_vote','>', now())->get();
        // to dispaly idea name in chart js
        $ideas_vote=[];
        $count=0;
        foreach($votes as $vote)
        {
             foreach($vote->voteideas as $key=>$vote)
             {
               // array_push($ideas_vote,$vote->idea->name);
               //  $ideas_vote[$key]=array('label'=>$vote->idea->name,'value' => $vote->id);
                $ideas_vote[$key]=['label'=>$vote->idea->name,'value' => $vote->count];
                $count+=$vote->count;
             } 
        }
        //dd($count);
        $ideas_vote=json_encode($ideas_vote);
       // dd($ideas_vote);
        return view('user.home.index',compact('ideas','news','votes','ideas_vote','count'));
    }
}
