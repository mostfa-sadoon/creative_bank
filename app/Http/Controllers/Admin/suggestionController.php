<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suggestion;

class suggestionController extends Controller
{
    //
    public function index()
    {
        $suggestions= Suggestion::paginate(25);
        return view('admin.suggesions.index',compact('suggestions'));
    }
}
