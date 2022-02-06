<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Idea;               
use App\Models\Vote;
use Alert;
use App\Models\Voteidea;


class VoteController extends Controller
{
    //
    public function index()
    {
        return view('admin.vote.index');
    }
    public function create()
    {
        $ideas=Idea::select('name','id')->where('status','true')->get();
        return view('admin.vote.create',compact('ideas'));
    }
    public function store(Request $request)
    {
        DB::transaction(function()use($request)
            {
                $ideas=$request->ideas;
                $data = $this->validate(\request(),
                [
                    'end_vote'=>'required|date',
                    'name_ar'=>'required|max:35',
                    'name_en'=>'required|max:35',
                ]);
                $data['status']="true";
                $vote = Vote::create($data);
                foreach($ideas as $idea)
                {
                    $Voteidea = Voteidea::create([
                        'vote_id'=>$vote->id,
                        'idea_id'=>$idea,
                        'count'=>0
                     ]);
                }                
            });
            Alert::success('Congratulations', 'the news added successfully');
            return redirect()->route('vote.index');
    }
}
