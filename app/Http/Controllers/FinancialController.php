<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function income()
    {
        return view('financials.income');
    }

    public function expense()
    {
        return view('financials.expense');
    }

    public function purchaseBills()
    {
        return view('financials.purchase-bills');
    }
}
