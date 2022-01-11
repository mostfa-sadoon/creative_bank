<?php

namespace App\Http\Controllers\User\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    //
    public function index()
    {
        return view('user.earn.index');
    }
    public function about()
    {
        return view('user.bank.index');
    }
    public function conect()
    {
        return view('user.conect.index');
    }
    public function suggestions()
    {
        return view('user.suggestions.index');
    }
}
