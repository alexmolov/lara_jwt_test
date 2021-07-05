<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DataController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }

    public function testData(){
        return 'марго робит'; 
    }
}