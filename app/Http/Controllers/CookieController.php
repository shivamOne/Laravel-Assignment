<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;




class CookieController extends Controller
{
    public function setCookie(Request $request)
    {
        $minutes = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'virat', $minutes));
        //$response->cookie('name', 'virat', $minutes);
        return $response;
    }
    public function getCookie(Request $request)
    {
        $value = $request->cookie('name');
        echo $value;
    }
    public function deleteCookie(Request $request)
    {
        $response = new Response("Cookie deleted successfully");
        $response->withCookie(cookie('name', null, 0));
        return $response;
    }
}
