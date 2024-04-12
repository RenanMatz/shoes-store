<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shoe extends Model
{
    use HasFactory;

    public function colors(){
        return $this->hasMany(Color::class);
    } 
    
    public function get(){
        return $this->all();
    }
}
