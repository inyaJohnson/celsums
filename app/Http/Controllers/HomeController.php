<?php

namespace App\Http\Controllers;

use App\Models\User;

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
        $users = User::with('finance')->where('role_id', '!=', 1)->get();
        $view = view('admin.home', compact('users'));
        if(!auth()->user()->hasRole('admin')){
            $transactions = auth()->user()->Transactions()->get();
            $user = auth()->user();
            $view = view('home', compact('transactions', 'user'));
        }
        return $view;
    }
}
