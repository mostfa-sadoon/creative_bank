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
                'desc'=>'required|max:400|min:5',
                'img'=>'required|mimes:jpg,png,jpeg,gif,svg|max:42000',
                'problem'=>'required|max:2000|min:20',
                'solve'=>'required|max:2000|min:20',
                'attachment'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:8192',
                'category_id'=>'required',
                'videolink'=>'url',
                'Intellectual_property'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,docx,pdf|max:8192',
                'Feasibility_study'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,docx,pdf|max:8192',
                'patent'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,docx,pdf|max:8192',
            ]);

            if ($validator->fails()) {
                //return response($validator->messages()->first(),404);
                return msg(false, $validator->messages()->first());
            } else {
                $img = $this->MoveImage($request->img, 'uploads/imgs/idea');
                if($request->hasfile('attachment'))
                {
                    $attachment = $this->MoveImage($request->attachment,'uploads/attachment');
                }else{
                    $attachment=null;
                }
                if($request->hasfile('Intellectual_property'))
                {
                    $Intellectual_property = $this->MoveImage($request->Intellectual_property,'uploads/attachment/Intellectual_property');
                }else{
                    $Intellectual_property=null;
                }
                if($request->hasfile('Feasibility_study'))
                {
                    $Feasibility_study = $this->MoveImage($request->Feasibility_study,'uploads/attachment/Feasibility_study');
                }else{
                    $Feasibility_study=null;
                }
                if($request->hasfile('patent'))
                {
                    $patent = $this->MoveImage($request->patent,'uploads/attachment/patent');
                }else{
                    $patent=null;
                }
                // $data=$request->all();
                // $data['user_id']=Auth::user()->id;
                // $data['view']=0;
                // $data['like']=0;
                // $data['img']=$img;
                // $data['Intellectual_property']=$Intellectual_property;
                // $data['Feasibility_study']=$Feasibility_study;
                // $data['attatchment']=$attachment;
                // $data['patent']=$patent;
                // Idea::create($data);
                Idea::create([
                    'name'=>$request->name,
                    'user_id'=>Auth::user()->id,
                    'img'=> $img,
                    'videolink'=>$request->video_link,
                    'problem'=>$request->problem,
                    'solve'=>$request->solve,
                    'attatchment'=>$attachment,
                    'desc'=>$request->desc,
                    'category_id'=>$request->category_id,
                    'Intellectual_property'=>$Intellectual_property,
                    'Feasibility_study'=>$Feasibility_study,
                    'patent'=>$patent,
                ]);
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
