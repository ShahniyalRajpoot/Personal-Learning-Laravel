<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\App;



class HomeController extends Controller
{

    // public function checkApi(){
    //     $response = Http::get('https://retoolapi.dev/mqc8wE/bank');
    //     $data = $response->json();
    //     return view('demo',get_defined_vars());
    // }
    public function home($lang = null){
        App::setlocale($lang);
        return view('home');
    }
    public function about(){
        return view('about');
    }
}
