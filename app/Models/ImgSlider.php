<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgSlider extends Model
{
    use HasFactory;

    public function getImgAttribute($img)
    {
        if ($img)
        {
            return asset('/interface/slider') . '/' . $img;
        }
    }
}
