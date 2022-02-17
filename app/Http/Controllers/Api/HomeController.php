<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;   
use App\Models\Idea;
use App\Models\News;
use App\Models\Vote;
use App\Models\ImgSlider;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $data=[];
        $lang=$request->header('lang');
        $imgsSlider=ImgSlider::select('img')->get();
        $ideas=Idea::select('id','name','img','desc','view','like')->where('status','true')->orderBy('created_at', 'desc')->take(6)->get();
        $news=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','img','id')->orderBy('created_at', 'desc')->take(6)->get();
        $votes=Vote::select('id','name_'.$lang.' as name','end_vote','created_at')->with('voteideas')->where('status','true')->get();
        $data['imgsSlider']=$imgsSlider;
        $data['ideas']=$ideas;
        $data['news']=$news;
        $data['vote']=$votes;
        $data['bsetSubscriper']=[];
        return msgdata(true,'get data successfully',$data);
    }

}
