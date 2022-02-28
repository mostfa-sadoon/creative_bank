<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['name'];
    public function getNameAttribute()
    {
        return $this['name_' . app()->getLocale()];
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
