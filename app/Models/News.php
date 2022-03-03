<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'news';
    protected $guarded = [];
    protected $appends = ['desc','header','news'];
    public function getImgAttribute($img)
    {
        if ($img)
        {
            return asset('/uploads/news') . '/' . $img;
        }
    }
    public function getdescAttribute()
    {
        return $this['desc_' . app()->getLocale()];
    }
    public function getHeaderAttribute()
    {
        return $this['header_' . app()->getLocale()];
    }
    public function getNewsAttribute()
    {
        return $this['news_' . app()->getLocale()];
    }
    public function getCreatedAtAttribute($value)
    {
        //$value=Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
       return Carbon::parse($value)->format('m/d/Y');
    }
    public function NewCategory()
    {
        return $this->belongsTo(NewCategory::class);
    }
}
