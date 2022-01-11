<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Idea;

class IdeaController extends Controller
{
    //
     public function index()
     {
         $ideas=Idea::get();
         return view('admin.idea.index',compact('ideas'));
     }
     public function show($id)
     {
         $idea=Idea::find($id);
         return view('admin.idea.show',compact('idea'));
     }
}
