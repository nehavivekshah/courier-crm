<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function carriers()
    {
        return view('config.carriers');
    }

    public function centers()
    {
        return view('config.centers');
    }

    public function zones()
    {
        return view('config.zones');
    }

    public function charges()
    {
        return view('config.charges');
    }

    public function rates()
    {
        return view('config.rates');
    }

    public function gst()
    {
        return view('config.gst');
    }
}
