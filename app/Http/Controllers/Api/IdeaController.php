<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Userlike;
use App\Models\Voteuser;

use Validator;

class IdeaController extends Controller
{
    //
    public function index(Request $request){
        $lang=$request->header('lang');
        $categories=Category::select('id','name_'.$lang.' as name')->get();
        $data['categories']=$categories;
        return msgdata(true,'get categories successfully',$data);
    }
    public function store(Request $request){
           //start validation
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                'desc'=>'required|max:300|min:10',
                'img'=>'required|mimes:jpg,png,jpeg,gif,svg|max:42000',
                'problem'=>'required|max:2000|min:50',
                'solve'=>'required|max:2000|min:50',
                'attachment'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:8192',
                'category_id'=>'required',
                'video_link'=>'url',
            ]);
            if ($validator->fails()) {
                return msg(false, $validator->messages()->first());
            } else {
                $img = $this->MoveImage($request->img, 'uploads/imgs/idea');
                if($request->hasfile('attachment'))
                {
                    $attachment = $this->MoveImage($request->attachment,'uploads/attachment');
                }else{
                    $attachment=null;   
                }
                $data=$request->all();
                $data['user_id']=Auth::user()->id;
                $data['view']=0;
                $data['like']=0;
                Idea::create($data);
                return msg(true,'idea added successfully');
            }
    }
    public function show(Request $request)
    {
         $id=$request->id;
         $idea=Idea::with(['comments'=>function($q){
            $q->with('user');
        }])->with('voteideas')->find($id);
        $idea->setAttribute('likeStatus', "false");
        $idea->setAttribute('voteStatus', "false");
        if( Auth::guard('api')->user()){
                $userlike=Userlike::where('user_id',Auth::guard('api')->user()->id)->where('idea_id',$id)->count();
                if($userlike > 0)
                {
                    $idea->setAttribute('likeStatus', "true");
                }
                $voteuser=Voteuser::where('user_id',Auth::guard('api')->user()->id)->where('idea_id',$id)->count();  
                if($voteuser>0){
                    $idea->setAttribute('voteStatus', "true");
                }
        }
         return msgdata(true,'get idea success',$idea);
    }

}
