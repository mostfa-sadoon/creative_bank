<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Idea;
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
                'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'problem'=>'required|max:2000|min:50',
                'solve'=>'required|max:2000|min:50',
                'attachment'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:8192',
                'category_id'=>'required',
                'video_link'=>'url',
            ]);
            if ($validator->fails()) {
                return msg(false,'idea added successfully');
                return response()->json(['status' => 401, 'msg' => $validator->messages()]);
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
}
