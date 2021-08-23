<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $view = view('admin.home');
        if(!auth()->user()->hasRole('admin')){
            $transactions = auth()->user()->Transactions()->get();
            $view = view('home', compact('transactions'));
        }
        return $view;
    }
}
