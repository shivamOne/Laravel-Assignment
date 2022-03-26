<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class urlcontroller extends Controller
{
    public function index(Request $request)
    {
        // Usage of path method
        $path = $request->path();
        echo 'Path Method: ' . $path;
        echo '<br>';

        // Usage of is method
        $pattern = $request->is('foo/*');
        echo 'is Method: ' . $pattern;
        echo '<br>';

        //Usage of isMethod method
        $methodname = $request->isMethod('POST');
        echo 'isMethod: ' . $methodname;
        echo '<br>';

        //Usage of Method method
        $methodtype = $request->method();
        echo 'Method: ' . $methodtype;
        echo '<br>';

        // Usage of url method
        $url = $request->url();
        echo 'url method: ' . $url;
        echo '<br>';

        // Usage of fullUrl method
        $url1 = $request->fullUrl();
        echo 'fullurl method: ' . $url1;
        echo '<br>';

        $routeis = $request->routeIs('user.*');
        echo 'routeIs method: ' . $routeis;
    }
}
