<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Customers extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table="table_registered";
    protected $primarykey="id";

    //Mutator 
    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

        // //Accessor  
        // public function getNameAttribute($value){
        //     $this->attributes['name'] = ucwords($value);
        // }
}
