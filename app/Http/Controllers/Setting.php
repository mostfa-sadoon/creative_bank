<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\About;

class Setting extends Controller
{
    //
    public function index()
    {
        $owners=Owner::get();
        return view('admin.owner.index',compact('owners'));
    }
    public function edit($id)
    {
         $owner=Owner::find($id);
         return view('admin.owner.edit',compact('owner'));
    }
    public function update(Request $request)
    {
        $id=$request->id;
        $img=null;
        if($request->img){
            $img = $this->MoveImage($request->img, 'uploads/owner');
        }

        $owner=Owner::find($id);
        $owner->update([
           'img'=>$img,
           'desc_ar'=>$request->desc_ar,
           'desc_en'=>$request->desc_en,
        ]);
        return redirect()->route('owner.index');
    }
    public function about()
    {
       $abouts=About::get();
       return view('admin.about.index',compact('abouts'));
    }

   public function aboutedit($id)
   {
        $about=About::find($id);
        return view('admin.about.edit',compact('about'));
   }

    public function aboutUpdate(Request $request)
    {
        $id=$request->id;
        $about=About::find($id);
        $about->update([
            'ideaRate_ar'=>$request->ideaRate_ar,
            'ideaRate_en'=>$request->ideaRate_en,

            'ideaStudy_ar'=>$request->ideaStudy_ar,
            'ideaStudy_en'=>$request->ideaStudy_en,

            'acceptedIdea_ar'=>$request->acceptedIdea_ar,
            'acceptedIdea_en'=>$request->acceptedIdea_en,

            'vision_ar'=>$request->vision_ar,
            'vision_en'=>$request->vision_en,

            'mission_ar'=>$request->mission_ar,
            'mission_en'=>$request->mission_en,
        ]);
        return redirect()->route('fekrtk.about');
    }
}
