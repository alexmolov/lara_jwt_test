<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DataController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth:api');
    }

    public function testData(){
        return 'марго робит'; 
    }
}