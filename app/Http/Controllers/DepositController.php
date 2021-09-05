<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductDepositRequest;
use App\Models\Product;
use App\Models\Transaction;

class DepositController extends Controller
{
    public function index(){
        $miniProducts = Product::where('type', 'mini')->get(['id', 'name', 'amount']);
        $megaProducts = Product::where('type', 'mega')->get(['id', 'name', 'amount']);
        return view('deposit.index', compact('miniProducts', 'megaProducts'));
    }

    public function invoice(Product $product){
        return view('deposit.invoice', compact('product'));
    }

    public function store(ProductDepositRequest $request, Product $product){
        Transaction::create([

        ]);
    }
}
