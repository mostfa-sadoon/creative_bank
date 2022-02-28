<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewCategory;
use Illuminate\Http\Request;


class NewCategories extends Controller
{
    //

    public function index()
    {
        $NewCategories=NewCategory::get();
        return view('admin.new.newCategory.index',compact('NewCategories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.new.newCategory.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|max:50',
            'name_en' => 'required|max:50'
        ]);
        NewCategory::create([
          'name_ar'=>$request->name_ar,
          'name_en'=>$request->name_en
        ]);
        return redirect()->route('NewCategory.index');
    }

    public function edit($id)
    {
        //
        $NewCategory=NewCategory::find($id);
        return view('admin.new.newCategory.edit',compact('NewCategory'));
    }


    public function update(Request $request)
    {
        //
        $id=$request->id;
            $request->validate([
            'name_ar' => 'required|max:50',
            'name_en' => 'required|max:50'
        ]);
        $NewCategory=NewCategory::find($id);
        $NewCategory->update([
          'name_ar'=>$request->name_ar,
          'name_en'=>$request->name_en
        ]);
        return redirect()->route('NewCategory.index');
    }

    public function destroy($id)
    {
        $NewCategory=NewCategory::find($id);
        $NewCategory->delete();
        return redirect()->back();
    }

}
