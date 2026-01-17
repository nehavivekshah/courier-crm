<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiverController extends Controller
{
    public function index()
    {
        return view('receivers.index');
    }
}
