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

           // $data =  AboutResource::collection(About::latest()->get());
            $data = new AboutResource(About::first());
            return msgdata(true,'retuen success',$data);
    }

    public function ContactInfo_Index()
    {
            $data =  ContactInfoResource::collection(ContactInfo::latest()->get());
            return msgdata(true,'retuen success',$data);
    }


}
