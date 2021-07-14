<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    public function index()
    {
        //$travels = Travel::all();
        $travels = Travel::all();
        dd($travels);
        return view('home');
    }
}
