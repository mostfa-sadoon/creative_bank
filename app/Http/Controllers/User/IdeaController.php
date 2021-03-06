<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Events\IdeaViewer;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Field;
use App\Models\Comment;
use App\Models\Userlike;
use App\Models\Vote;
use App\Models\Voteidea;
use App\Models\Voteuser;
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
            'desc'=>'required|max:400|min:5',
            'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'problem'=>'required|max:2000|min:20',
            'solve'=>'required|max:2000|min:20',
            'attachment'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:8192',
            'category'=>'required',
            'Intellectual_property'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,docx,pdf|max:8192',
            'Feasibility_study'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,docx,pdf|max:8192',
            'patent'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,docx,pdf|max:8192',
        ]);
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
        if($request->video_link!=null){
            $request->validate([
                'video_link'=>'url',
            ]);
        }
        Idea::create([
            'name'=>$request->name,
            'user_id'=>Auth::user()->id,
            'img'=> $img,
            'videolink'=>$request->video_link,
            'problem'=>$request->problem,
            'solve'=>$request->solve,
            'attatchment'=>$attachment,
            'desc'=>$request->desc,
            'category_id'=>$request->category,
            'Intellectual_property'=>$Intellectual_property,
            'Feasibility_study'=>$Feasibility_study,
            'patent'=>$patent,
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
        $votestatus="false";
        // to check if user vote or note
        $uservote="false";
        $vote="";
        $votes=Vote::with('voteideas')->where('status','true')->get();
        foreach($votes as $vote){
           foreach ($vote->voteideas as $key=>$vote)
           {
                if($vote->idea_id==$id){
                  // vote status to check if idea in vote or note
                  $votestatus="true";
                  $vote_id=$vote->vote_id;
                  $vote=Vote::find($vote_id);
                  break;
                }
           }
         }
        // this to check of the user is interaction
         $interaction="false";
         if(Auth::user())
         {
            $userlike=Userlike::where('user_id',Auth::user()->id)->where('idea_id',$id)->count();
            if($userlike > 0)
            {
                $interaction="true";
            }
            if(isset($vote_id)){
                $voteuser=Voteuser::where('user_id',Auth::guard('web')->user()->id)->where('idea_id',$id)->where('vote_id',$vote_id)->count();
                if($voteuser>0){
                    $uservote="true";
                }
            }
         }
        // dd($uservote);
        // dd($interaction);

        return view('user.idea.show',compact('idea','category','interaction','votestatus','vote','uservote'));
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
       $comment= Comment::create([
            'user_id'=>Auth::user()->id,
            'idea_id'=>$idea_id,
            'comment'=>$request->comment,
        ]);
        $comments=DB::table('comments')->join('users', 'users.id', '=', 'comments.user_id')->select('comment','comments.created_at','name','img')->where('idea_id','=',$idea_id)->latest()->orderBy('created_at','asc')->take(40)->get();
        return $comments;
    }
    public function like(Request $request)
    {
        $id=$request->id;
        $userlike=Userlike::where('user_id',Auth::user()->id)->where('idea_id',$id)->count();
        $idea=Idea::find($id);
        if($userlike==0)
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
