<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerscreensController extends Controller
{
    public function index()
    {
        return view('buyerscreens'); // Make sure this matches the name of your blade file
    }

}
