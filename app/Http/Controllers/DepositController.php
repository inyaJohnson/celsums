<?php

namespace App\Http\Controllers;

class DepositController extends Controller
{
    public function index(){
        return view('deposit.index');
    }

    public function invoice(){
        return view('deposit.invoice');
    }
}
