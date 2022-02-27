<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getImgAttribute($img)
    {
        if ($img)
        {
            return asset('/uploads/owner') . '/' . $img;
        }else{
            return asset('/uploads/owner/ceo.jpeg');
        }
    }

}
