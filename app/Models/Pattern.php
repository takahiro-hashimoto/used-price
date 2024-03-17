<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    use HasFactory;
    
    public function shops() {
        return $this->belongsToMany('App\Models\Shop');
    }
}

