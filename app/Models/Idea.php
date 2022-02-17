<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Idea extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = [];    
    protected $appends = ['likestatus'];
    public function getlikestatusAttribute()
    {
        return false;
    }

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
    public function getVideoAttribute($video)
    {
        if ($video)
        {
           
            return  str_replace("watch?v=","embed/",$video);
        }
    }

    // public function  getVideoAttribute($url)
    // {
    //     if(strlen($url) > 11)
    //     {
    //         if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
    //         {
    //             return $match[1];
    //         }
    //         else
    //             return false;
    //     }
    //     return "ffdfd";
    // }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function field()
    {
        return $this->belongsTo(Field::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function voteideas()
    {
        return $this->hasMany(Voteidea::class);
    }
}
