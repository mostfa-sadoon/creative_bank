<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classification;

class ClassificationController extends Controller
{
    //
    public function index()
    {
        $classifications=Classification::get();
        return view('admin.classification.index',compact('classifications'));
    }
    public function create()
    {
        //
        return view('admin.classification.create');
    }
    public function store(Request $request)
    {
        $data = $this->validate(\request(),
        [
            'name_ar'=>'required|max:35',
            'name_en'=>'required|max:35',
        ]);
        Classification::create($data);
        return redirect()->route('classification.index');
    }
    public function edit($id)
    {
        //
        $classification=Classification::find($id);
        return view('admin.classification.edit',compact('classification'));
    }

    public function update(Request $request)
    {
        //  classification
        $id=$request->id;
            $request->validate([
            'name_ar' => 'required|max:50',
            'name_en' => 'required|max:50'
        ]);
        $classification=Classification::find($id);
        $classification->update([
          'name_ar'=>$request->name_ar,
          'name_en'=>$request->name_en
        ]);
        return redirect()->route('classification.index');
    }
    public function destroy($id)
    {
        $classification=Classification::find($id);
        $classification->delete();
        return redirect()->back();
    }
}
