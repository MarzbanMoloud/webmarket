<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function like(Request $request)
    {
        echo 'helooooo';

        if (Request::ajax()) {
            $name = Input::get('cRateStr');
            return $name;

        }
        return "HTTP";
    }


}
