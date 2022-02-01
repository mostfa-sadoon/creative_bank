<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suggestion;
use Alert;

class suggestionController extends Controller
{
    //
    public function index()
    {
      return view('user.suggestions.index');
    }
    public function store(Request $request)
    {
      $data = $this->validate(\request(),
      [
          'suggestion'=>'required|max:350',
      ]);
      $data['user_id']=$request->user_id;
      Suggestion::create($data);
      Alert::success('success', 'your suggestion added successfully');
      return redirect()->route('home');
    }
}
