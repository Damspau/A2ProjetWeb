<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activities::all();
 
        return view('activities', compact('activities'));
    }
}
?>
