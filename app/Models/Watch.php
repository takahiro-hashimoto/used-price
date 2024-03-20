<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;
    
    public function patterns() {
        return $this->belongsToMany(Pattern::class)
                    ->withPivot('pattern_id');
    }
}
