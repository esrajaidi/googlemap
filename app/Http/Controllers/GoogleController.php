<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleController extends Controller
{

    public function index()

    {
        $locations = [
            ['Home', 32.896352,13.228483],
            ['Home2', 32.896604146568734, 13.227581562491059],          
            ['مستشفي ابي سته', 32.89683836697525, 13.223204197676884],           
 
        ];

        return view('googleAutocomplete')->with('locations',$locations);

    }
    //
}
