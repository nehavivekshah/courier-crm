<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogisticController extends Controller
{
    public function inwards()
    {
        return view('logistics.inwards');
    }

    public function drsUploads()
    {
        return view('logistics.drs-uploads');
    }

    public function drsPrint()
    {
        // For the missing drs-print-preview.php logic
        return view('logistics.drs-print');
    }

    public function barcodes()
    {
        return view('logistics.barcodes');
    }
}
