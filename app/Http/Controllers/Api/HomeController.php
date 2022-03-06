<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\News;
use App\Models\Vote;
use App\Models\ImgSlider;
use App\Models\Userlike;
use App\Models\Owner;
use App\Http\Resources\newsHome;
use Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {

        $data=[];
        $lang='ar';
        $lang=$request->header('lang');
        \App::setLocale($lang);
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
        }
        else{
            foreach($ideas as $idea){
                $idea->setAttribute('likeStatus', "false");
            }
        }
      // $news= newsHome::collection(News::orderBy('created_at', 'desc')->take(6)->get());
    //   $news=News::orderBy('created_at', 'desc')->take(6)->get()->makeHidden(['category_id','created_at','updated_at','deleted_at','admin_id','desc_ar','desc_en','header_ar','header_en','news_ar','news_en']);
         $news= newsHome::collection(News::orderBy('created_at', 'desc')->take(6)->get());
        $votes=Vote::select('id','name_'.$lang.' as name','end_vote','created_at')->with('voteideas')->where('status','true')->get();
        $owner=Owner::first()->makehidden(['created_at','updated_at','desc_ar','desc_en']);
        $data['imgsSlider']=$imgsSlider;
        $data['ideas']=$ideas;
        $data['news']=$news;
        $data['vote']=$votes;
        $data['owner']=$owner;
        return msgdata(true,'get data successfully',$data);
    }

    public function like()
    {

    }

}
