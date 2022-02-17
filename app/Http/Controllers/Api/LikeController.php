<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Idea;
use App\Models\Userlike; 
use Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //
    public function like(Request $request)
    {
        $id=$request->id;
        $userlike=Userlike::where('user_id',Auth::guard('api')->user()->id)->where('idea_id',$id)->count();
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
