<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    protected $guarded = [];    
    public function getImgAttribute($img)
    {
        if ($img)
        {
            return asset('/uploads/imgs/idea') . '/' . $img;
        }
    }
    public function getAttatchmentAttribute($attatchment)
    {
        if ($attatchment)
        {
            return asset('/uploads/attachment') . '/' . $attatchment;
        }
    }

    public function  getVideo_linkAttribute($url)
    {
        if(strlen($url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                return $match[1];
            }
            else
                return false;
        }
        return $url;
    }
}
