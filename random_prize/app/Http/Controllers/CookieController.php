<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Response;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;


class CookieController extends Controller
{
    //
    public function setCookie(Request $request){
        // $minutes = 1;
        // $response = new Response('Set Cookie');
        // $response->withCookie(cookie('name', 'MyValue', $minutes));
        // $value = Cookie::get('name');
        // return $value;

        // dd($value);
     }
    
     public function test(){
         dd('test');
     }
}
