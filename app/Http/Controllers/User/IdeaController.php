<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Events\IdeaViewer;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Field;
use App\Models\Comment;  
use App\Models\Userlike; 
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
            'desc'=>'required|max:80|min:10',
            'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'video_link'=>'url',
            'problem'=>'required|max:2000|min:50',
            'solve'=>'required|max:2000|min:50',
            'attachment'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:8192',
            'category'=>'required'
        ]);
        $img = $this->MoveImage($request->img, 'uploads/imgs/idea');
        if($request->hasfile('attachment'))
        {
            $attachment = $this->MoveImage($request->attachment,'uploads/attachment');
        }else{
            $attachment=null;   
        }
        Idea::create([
            'name'=>$request->name,
            'user_id'=>Auth::user()->id,
            'img'=> $img,
            'video_link'=>$request->video_link,
            'problem'=>$request->problem,
            'solve'=>$request->solve,
            'attatchment'=>$attachment,
            'desc'=>$request->desc,
            'category_id'=>$request->category,
        ]);
        Alert::success('Congratulations', 'your idea added will reviewd by admin');
        return redirect()->route('home');
    }
    public function show($id)
    {
        $idea=Idea::with('comments')->find($id);
        event(new IdeaViewer($idea));
        $lang=app()->getLocale();
        $category=Category::select('name_'.$lang.' as name')->find($idea->category_id);
        // this to check of the user is interaction 
         $userlike=Userlike::where('user_id',Auth::user()->id)->where('idea_id',$id)->count();
         $interaction="false";
         if($userlike > 0)
         {
             $interaction="true";
         }
        // dd($interaction);
        return view('user.idea.show',compact('idea','category','interaction'));
    }
    public function allidea()
    {
        $ideas=Idea::select('id','name','img','desc')->where('status','true')->paginate(10);
        return view('user.idea.allidea',compact('ideas'));
    } 
    public function sendcomment(Request $request)
    {
        $idea_id=$request->idea_id;
        $request->validate([
            'comment'=>'required|max:200',
        ]);
        Comment::create([
            'user_id'=>$request->user_id,
            'idea_id'=>$idea_id,
            'comment'=>$request->comment,
        ]);
        return redirect()->route('user.idea.show',$idea_id);
    }
    public function like(Request $request)
    {
        $id=$request->id;
        $userlike=Userlike::where('user_id',Auth::user()->id)->where('idea_id',$id)->get();
        $idea=Idea::find($id);
        if($userlike)
        {
            $idea->update([
               'like'=>$idea->like+1,
            ]);
            Userlike::create([
                'user_id'=>Auth::user()->id,
                'idea_id'=>$request->id
             ]);
        }
        return response()->json(['msg'=>'success','like'=>$idea->like]);
    }
    public function unlike(Request $request)
    {
        $id=$request->id;
        $userlike=Userlike::where('user_id',Auth::user()->id)->where('idea_id',$id)->first();
        $idea=Idea::find($id);
        if($userlike)
        {
            $idea->update([
                'like'=>$idea->like-1,
             ]);
            $userlike->delete();
        }
        return response()->json(['msg'=>'success','like'=>$idea->like]);
    }
}