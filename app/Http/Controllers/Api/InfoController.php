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
    public function index(Request $request)
        {
            $lang='ar';
            $lang=$request->header('lang');
            App::setLocale($lang);
           // $data =  AboutResource::collection(About::latest()->get());
            $data = new AboutResource(About::first());
            return msgdata(true,'retuen success',$data);
    }

    public function ContactInfo_Index()
    {
        $data = new ContactInfoResource(ContactInfo::first());
            return msgdata(true,'retuen success',$data);
    }
}
