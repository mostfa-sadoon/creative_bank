<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commonquestion;
use Alert;

class CommonquestionController extends Controller
{
    //
    public function index()
    {
        $lang=app()->getLocale();
        $commonquestions=Commonquestion::select('question_'.$lang.' as question','answer_'.$lang.' as answer','id')->get();
        return view('admin.Commonquestion.index',compact('commonquestions'));
    }
    public function create()
    {
        return view('admin.commonquestion.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'question_ar' => 'required|max:120',
            'question_en' => 'required|max:120',
            'answer_ar' => 'required|max:1200',
            'answer_en' => 'required|max:1200'
        ]);
        Commonquestion::create([
            'question_ar'=>$request->question_ar,
            'question_en'=>$request->question_en,
            'answer_ar'=>$request->answer_ar,
            'answer_en'=>$request->answer_en,
        ]);
        Alert::success('success', 'question added successfully');
        return redirect()->route('commonquestions.index');
    }
    public function edit($id)
    {
        $question=Commonquestion::find($id);
        return view('admin.commonquestion.edit',compact('question'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'question_ar' => 'required|max:120',
            'question_en' => 'required|max:120',
            'answer_ar' => 'required|max:1200',
            'answer_en' => 'required|max:1200'
        ]);
        $quesion=Commonquestion::find($request->id);
        $quesion->update([
            'question_ar'=>$request->question_ar,
            'question_en'=>$request->question_en,
            'answer_ar'=>$request->answer_ar,
            'answer_en'=>$request->answer_en,
        ]);
        Alert::success('success', 'question added successfully');
        return redirect()->route('commonquestions.index');
    }
    public function delete($id)
    {
        $quesion=Commonquestion::find($id);
        $quesion->delete();
        Alert::success('success', 'question deleted successfully');
        return redirect()->route('commonquestions.index');
    }
}
