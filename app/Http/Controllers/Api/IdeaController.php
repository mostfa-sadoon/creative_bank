<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
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
        $validator = Validator::make($request->all(), [
            'name' =>    'required|string|between:12,50',
            'category_id' =>   'required|unique:users|max:50',
            'address'=>  'required|max:60|min:12',
            'img'=>   'required',
            'field'=>    'required',
            'clasified'=>'required',
            'date_of_birth'=>'required',
            'password'=> 'required|min:6|max:50|confirmed',
            'password_confirmation' => 'required|max:50|min:6',



            'name'=>'required',
            'desc'=>'required|max:300|min:10',
            'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'problem'=>'required|max:2000|min:50',
            'solve'=>'required|max:2000|min:50',
            'attachment'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:8192',
            'category_id'=>'required'
        ]);
    



        if($request->video_link!=null){
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
        }

    }
}
