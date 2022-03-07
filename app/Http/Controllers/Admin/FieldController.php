<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Field;

class FieldController extends Controller
{
    //
    public function index()
    {
        $fields=Field::get();
        return view('admin.users.fields.index',compact('fields'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.fields.create');
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
        Field::create([
          'name_ar'=>$request->name_ar,
          'name_en'=>$request->name_en
        ]);
        return redirect()->route('field.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $field=Field::find($id);
        return view('admin.users.fields.edit',compact('field'));
    }
    public function show($id)
    {
        $field=Field::find($id);
        return view('admin.users.fields.show',compact('field'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id=$request->id;
            $request->validate([
            'name_ar' => 'required|max:50',
            'name_en' => 'required|max:50'
        ]);
        $field=Field::find($id);
        $field->update([
          'name_ar'=>$request->name_ar,
          'name_en'=>$request->name_en
        ]);
        return redirect()->route('field.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $field=Field::find($id);
            $field->delete();
            return redirect()->back();
        }
    }
}
