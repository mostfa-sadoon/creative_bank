<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voteidea extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public function vote()
    {
        return $this->belongsTo(Vote::class);
    }
    public function idea()
    {
        return $this->belongsTo(Idea::class);
    }
}
