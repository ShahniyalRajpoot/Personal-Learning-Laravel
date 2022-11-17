<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    use HasFactory;
    protected $primarykey='id';

    public function getGroup(){
        // return $this->hasOne('App\Models\groups','group_id');
        return $this->hasMany('App\Models\groups','group_id','group_id');

    }
}
