<?php

namespace App\Http\Controllers\User\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class LayoutController extends Controller
{
    //
    public function index()
    {
        return view('user.earn.index');
    }
    public function about()
    {
        $about=About::first();
        return view('user.bank.index',compact('about'));
    }
    public function conect()
    {
        return view('user.conect.index');
    }
    public function suggestions()
    {
        return view('user.suggestions.index');
    }
    public function profite()
    {
        return view('user.earn.index');
    }
}
