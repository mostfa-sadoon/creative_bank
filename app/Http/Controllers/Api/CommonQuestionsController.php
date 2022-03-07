<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commonquestion;
use App\Http\Resources\CommonQuestionsResource;


class CommonQuestionsController extends Controller
{
    //
    public function index(Request $request)
        {   
            // dd($request);
            $lang='ar';
            $lang=$request->header('lang');
            \App::setLocale($lang);
           $data =  CommonQuestionsResource::collection(Commonquestion::all());
            // $data = new CommonQuestionsResource(Commonquestion::first());
            return msgdata(true,'retuen success',$data);
    
    }
}
