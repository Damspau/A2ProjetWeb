<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class flight extends Controller
{
    function list(){
    	return Flight::all();
    }
}
