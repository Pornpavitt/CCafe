<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bill extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function products() {
        return $this->belongsToMany(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'usersID');
    }
    public function reservetable(){
        return $this->belongsTo(reservetable::class);
       }
     
    

}
