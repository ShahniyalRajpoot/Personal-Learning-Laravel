<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\groups as Group;
// use App\Models\members;
class DemoController extends Controller
{
    //
    public function index(){
        return members::with('getGroup')->get();
        // return members::find(1)->getGroup;

    }

    public function data_index(Group $group_id){
        // return groups::with('getMember')->get();
        return $group_id;
        // return groups::find($group_id);
    }
}
