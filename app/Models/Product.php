<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function department()
    {
        return $this->belongsTo(category::class);
    }
    public function bills() {
        return $this->belongsToMany(bill::class);
    }
        
        
}
