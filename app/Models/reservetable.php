<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservetable extends Model
{
    use HasFactory;
    public function bills(){
        return $this->hasMany(bill::class);
    }
}
