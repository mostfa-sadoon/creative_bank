<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\News;
use Alert;
use Auth;

class NewsController extends Controller
{
    //
      public function index()
      {
         $lang=app()->getLocale();
         $news=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','img','id')->paginate(20);
         return view('admin.new.index',compact('news'));
      }
      public function create()
      {
         return view('admin.new.create');
      }
    public function store(Request $request)
    {
     //   dd($request->all());
         $request->validate([
            'header_ar' => 'required|max:50',
            'header_en' => 'required|max:50',
            'news_ar' => 'required|max:3000',
            'news_en' => 'required|max:3000',
            'desc_ar'=>'required|max:100',
            'desc_en'=>'required|max:100',
            'img'=>'required',
         ]);
         $img = $this->MoveImage($request->img,'uploads/news');
         $admin_id=Auth::guard('Admin')->user()->id;
         News::create([
            'header_ar'=>$request->header_ar,
            'header_en'=>$request->header_en,
            'news_ar'=>$request->news_ar,
            'news_en'=>$request->news_en,
            'desc_ar'=>$request->desc_ar,
            'desc_en'=>$request->desc_en,
            'img'=>$img,
            'admin_id'=>$admin_id,
         ]);
         Alert::success('Congratulations', 'the news added successfully');
         return redirect()->route('news.index');
    }
    public function show($id)
    {
       $lang=app()->getLocale();
       $new=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','news_'.$lang.' as news','img','id')->find($id);
       return view('admin.new.show',compact('new'));
    }
     public function edit($id)
     {
         $new=News::find($id);
         return view('admin.new.edit',compact('new'));
     }   
     public function update(Request $request)
     { 
         $news=News::find($request->id);
         $request->validate([
            'header_ar' => 'required|max:50',
            'header_en' => 'required|max:50',
            'news_ar' => 'required|max:3000',
            'news_en' => 'required|max:3000',
            'desc_ar'=>'required|max:100',
            'desc_en'=>'required|max:100',
           ]);
         if($request->hasfile('img'))
         {
            $request->validate([
               'img'=>'image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            ]);
            $img = $this->MoveImage($request->img, 'uploads/news');  
            $news->update([
               'header_ar' => $request->header_ar,
               'header_en' => $request->header_en,
               'news_ar' => $request->news_ar,
               'news_en' => $request->news_en,
               'desc_ar' => $request->desc_ar,
               'desc_en' => $request->desc_en,
               'img' => $img,
            ]);
         }else{
            $news->update([
               'header_ar' => $request->header_ar,
               'header_en' => $request->header_en,
               'news_ar' => $request->news_ar,
               'news_en' => $request->news_en,
               'desc_ar' => $request->desc_ar,
               'desc_en' => $request->desc_en,
            ]);
         }
         Alert::success('Congratulations','news updated successfully');
         return redirect()->route('news.show',$request->id);
   }
   public function trash($id)
   {
      $news = News::findOrFail($id);
      $news->delete();
      Alert::success('success', 'the  news has been  move to trach');
      return redirect()->route('news.index');
   }
   public function gettrash()
   {
      $lang=app()->getLocale();
      $news=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','img','id')->onlyTrashed()->paginate(20);
      return view('admin.new.trash',compact('news'));
   }
   public function showtrashed($id)
   {
      $lang=app()->getLocale();
      $new=News::select('desc_'.$lang.' as desc','header_'.$lang.' as header','news_'.$lang.' as news','img','id')->withTrashed()->find($id);
      return view('admin.new.trash_news',compact('new'));
   }
   public function destroy($id)
   {
      $news = News::withTrashed()->findOrFail($id);
      $news->forceDelete();
      Alert::success('success', 'the idea has been deleted');
      return redirect()->route('news.gettrash');
   }
   public function restore($id)
   {
      $news = News::withTrashed()->findOrFail($id);
      $news->update([
         'deleted_at'=>null
      ]);
      Alert::success('success', 'the news has restore successfully');
      return redirect()->route('news.gettrash');
   }
}
