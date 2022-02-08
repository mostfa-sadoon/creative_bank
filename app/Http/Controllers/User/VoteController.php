<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Voteidea; 
use App\Models\Voteuser;
use App\Models\Idea;
use Auth;

class VoteController extends Controller
{
    public function vote(Request $request)
    {
           // dd($request->all());
            $idea_id=$request->idea_id;
            $vote_id=$request->vote_id;
           // $vote=Vote::find($vote_id);
            $voteidea=Voteidea::where('idea_id',$idea_id)->where('vote_id',$vote_id)->first();
            $voteuser=Voteuser::where('user_id',Auth::guard('web')->user()->id)->where('vote_id',$vote_id)->first();
            if($voteuser==null)
            {
                $voteidea->update([
                    'count'=>$voteidea->count+1,
                ]);
                Voteuser::create([
                    'vote_id'=>$request->vote_id,
                    'idea_id'=>$request->idea_id,
                    'user_id'=>Auth::guard('web')->user()->id,
                ]);
            }
            else{
                $oldvoteidea=Voteidea::where('idea_id',$voteuser->idea_id)->where('vote_id',$vote_id)->first();
                if($voteidea->idea_id!=$voteuser->idea_id){
                    $oldvoteidea->update([
                        'count'=>$oldvoteidea->count-1,
                     ]);
                    $voteidea->update([
                        'count'=>$voteidea->count+1,
                    ]);
                    $voteuser->update([
                        'idea_id'=>$request->idea_id,
                    ]);
                }
            }
            return response()->json(['msg'=>'success','vote'=>$voteidea->count]);    
    }
        public function unvote(Request $request){
            $idea_id=$request->idea_id;
            $vote_id=$request->vote_id;
            $voteidea=Voteidea::where('idea_id',$idea_id)->where('vote_id',$vote_id)->first();
            $voteuser=Voteuser::where('user_id',Auth::guard('web')->user()->id)->where('vote_id',$vote_id)->first();
            if($voteuser){
                $voteidea->update([
                    'count'=>$voteidea->count-1,
                ]);
                $voteuser->delete();
            }
            return response()->json(['msg'=>'success','vote'=>$voteidea->count]);  
        }
}
