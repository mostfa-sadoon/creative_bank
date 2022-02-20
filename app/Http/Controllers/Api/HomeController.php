<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;   
use App\Models\Idea;
use App\Models\News;
use App\Models\Vote;
use App\Models\ImgSlider;
use App\Models\Userlike; 
use Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
       
        $data=[];
        $lang=$request->header('lang');
        $imgsSlider=ImgSlider::select('img')->get();
        $ideas=Idea::select('id','name','img','desc','view','like')->where('status','true')->orderBy('created_at', 'desc')->take(6)->get();
        if( Auth::guard('api')->user())
        {
              foreach($ideas as $idea){
                    $userlike=Userlike::where('user_id',Auth::guard('api')->user()->id)->where('idea_id',$idea->id)->count();
                    if($userlike > 0)
                    {
                      $idea->setAttribute('likeStatus', "true");
                    }else{
                        $idea->setAttribute('likeStatus', "false");
                    }
              }
        }else{
            foreach($ideas as $idea){             
                $idea->setAttribute('likeStatus', "false");
            }
        }
        $news=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','img','id','created_at')->orderBy('created_at', 'desc')->take(6)->get();
        $votes=Vote::select('id','name_'.$lang.' as name','end_vote','created_at')->with('voteideas')->where('status','true')->get();
        $data['imgsSlider']=$imgsSlider;
        $data['ideas']=$ideas;
        $data['news']=$news;
        $data['vote']=$votes;
        $data['bsetSubscriper']=[];
        return msgdata(true,'get data successfully',$data);
    }

    public function like()
    {

    }

}
