<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\ContactInfo;
use App\Http\Resources\AboutResource;
use App\Http\Resources\ContactInfoResource;

class InfoController extends Controller
{
    //About Us
    public function index()
    {     
            $data = About::latest()->get(); 
            return msgdata(true,'retuen success',$data);
    }

    public function ContactInfo_Index()
    {     
            $data = ContactInfo::latest()->get(); 
            // dd($data)
            return msgdata(true,'retuen success',$data);
    }


}
