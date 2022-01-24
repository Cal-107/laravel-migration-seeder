<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journey;

class HomeController extends Controller
{
    public function index() {
        $journeys = Journey::all();
        return view('home', compact('journeys'));
    }
};
