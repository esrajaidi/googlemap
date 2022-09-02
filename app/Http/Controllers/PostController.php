<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class PostController extends Controller
{
    

    public function __construct(Database $database)
    {
        $this->database = $database;
    }
    public function index()
    {

        return view('index');
    }
}
