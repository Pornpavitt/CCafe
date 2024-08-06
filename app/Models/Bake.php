<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bake extends Model
{
    use HasFactory;
    
    function cake(){
        return $this->belongsTo(Cake::class);
    }
}
