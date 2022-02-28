<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['ideaRate','ideaStudy','acceptedIdea'];
    public function getIdeaRateAttribute()
    {
        return $this['ideaRate_' . app()->getLocale()];
    }
    public function getIdeaStudyAttribute()
    {
        return $this['ideaStudy_' . app()->getLocale()];
    }
    public function getAcceptedIdeaAttribute()
    {
        return $this['acceptedIdea_' . app()->getLocale()];
    }
}
