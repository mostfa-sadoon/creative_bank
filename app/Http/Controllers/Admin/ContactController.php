<?php

namespace App\Http\Controllers\Admin;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInfo;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Admin
        $contact = Contact::all();
        return view('admin.suggestions/index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // User
          $ContactInfo= ContactInfo::first();
         return view('user.contact.index',compact('ContactInfo'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //user
        $data = $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required|max:255',
        ]);
    Contact::create($request->all());
     
        return redirect()->route('contact.create')
                        ->with('success','Suggestion created successfully.');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //admin
          return view('admin.suggestions/show',compact('contact'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //admin
        $contact->delete();
    
        return redirect()->route('admin.suggestions');
    }
}

