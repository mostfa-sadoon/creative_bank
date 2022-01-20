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
}
