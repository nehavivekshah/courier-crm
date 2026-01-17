<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function booking()
    {
        return view('reports.booking');
    }

    public function delivery()
    {
        return view('reports.delivery');
    }

    public function billPending()
    {
        return view('reports.bill-pending');
    }

    public function dailyCollection()
    {
        return view('reports.daily-collection');
    }

    public function gst()
    {
        return view('reports.gst');
    }
}
