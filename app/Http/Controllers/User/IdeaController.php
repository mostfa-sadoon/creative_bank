<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Idea;
use Alert;

class IdeaController extends Controller
{
    //
    public function create()
    {
        $lang=app()->getLocale();
        $categories=Category::select('name_'.$lang.' as name','id')->get();
         return view('user.idea.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'video_link'=>'url',
            'problem'=>'required|max:2000|min:50',
            'solve'=>'required|max:2000|min:50',
            'attachment'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:8192',
            'category'=>'required'
        ]);
        $img = $this->MoveImage($request->img, 'uploads/imgs/idea');
        $attachment = $this->MoveImage($request->attachment,'uploads/attachment');
        Idea::create([
            'name'=>$request->name,
            'img'=> $img,
            'video_link'=>$request->video_link,
            'problem'=>$request->problem,
            'solve'=>$request->solve,
            'attatchment'=>$attachment,
            'field_id'=>$request->category,
        ]);
        Alert::success('Congrats', 'your idea added will reviewd by admin');
        return redirect()->route('home');
    }
}