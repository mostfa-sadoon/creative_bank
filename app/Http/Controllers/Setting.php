<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\About;
use App\Models\ContactInfo;

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

            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,
        ]);
        return redirect()->route('fekrtk.about');
    }

    //Contact Info
    public function contactInfo_index()
    {
       $info=ContactInfo::first();
       return view('admin.info.index',compact('info'));
    }

   public function contactInfo_edit($id)
   {
        $info=ContactInfo::find($id);
        return view('admin.info.edit',compact('info'));
   }

    public function contactInfo_Update(Request $request)
    {
        // dd($request->id); 
        $id=$request->id;
        $info=ContactInfo::find($id);
        $info->update([
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'tweeter'=>$request->tweeter,
            'youtube'=>$request->youtube,
        ]);
        return redirect()->route('fekrtk.info');
    }

    public function user_about()
    {
       $abouts=About::first();
       $owners=Owner::first();

       return view('user.bank.index',compact('abouts', 'owners'));


    }

    public function owner_index()
    { 
        $owners=Owner::first();
        return view('admin.owner.index',compact('owners'));
    }
    
}
