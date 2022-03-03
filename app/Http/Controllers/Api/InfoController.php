<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Resources\AboutResource;

class InfoController extends Controller
{
    //About Us
    public function index()
    {     
            $data = About::latest()->get(); 
            return msgdata(true,'retuen success',$data);
     }


}
