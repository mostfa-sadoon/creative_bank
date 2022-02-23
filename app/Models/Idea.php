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
    public function getFeasibilityStudyAttribute($Feasibility_study)
    {
        if ($Feasibility_study)
        {
            return asset('/uploads/attachment/Feasibility_study') . '/' . $Feasibility_study;
        }
    }
    public function getIntellectualPropertyAttribute($Intellectual_property)
    {
        if ($Intellectual_property)
        {
            return asset('/uploads/attachment/Intellectual_property') . '/' . $Intellectual_property;
        }
    }
    public function getPatentAttribute($patent)
    {
        if ($patent)
        {
            return asset('/uploads/attachment/patent') . '/' . $patent;
        }
    }

    public function getVideolinkAttribute($Videolink)
    {
        if ($Videolink)
        {
            return  str_replace("watch?v=","embed/",$Videolink);
        }
    }

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
