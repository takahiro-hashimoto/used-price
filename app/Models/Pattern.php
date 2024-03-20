<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description'];
    
    public function shops() {
        return $this->belongsToMany(Shop::class)
                    ->withPivot('price');
    }
    
    public function watches() {
        return $this->belongsToMany(Watch::class)
                    ->withPivot('pattern_id');
    }
}