<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;


class RegistrationController extends Controller
{
    public function index(){
        // dd($_SERVER['DOCUMENT_ROOT']);
        $url=url('/customer');
        $title="Registration Form";
        $data=compact('url','title');

        return view('form')->with($data);
    }

    public function register(Request $request){
        $request->validate(
            [
                'fname'=>'required',
                'email'=>'required|email',
                'contact'=>'required', 
                // 'password'=>'required',
                'password'=>'required|confirmed',
                'password_confirmation'=>'required'
                // 'password_confirmation'=>'required|same:password'

            ]
        );
        echo "<pre>";
        print_r($request->all());

    }
}
