<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\HashIds;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    use HashIds;

    public function index(){
        $miniProducts = Product::where('type', 'mini')->get(['id', 'name', 'amount']);
        $megaProducts = Product::where('type', 'mega')->get(['id', 'name', 'amount']);
        return view('deposit.index', compact('miniProducts', 'megaProducts'));
    }

    public function invoice(Product $product){
        $token = $this->encrypt($product->id);
        return view('deposit.invoice', compact('product', 'token'));
    }

    public function store(Request $request, $token){
        $product = Product::find($this->decode($token));
        $user = auth()->user();
        $units = ($request->units) ?? 1;
        $user->transactions()->create([
            'amount' => $product->amount * $units,
            'type' => 'Product',
            'method_of_payment' => 'Cryptocurrency',
            'units' => $units,
            'product_id' => $product->id
        ]);
        return redirect()->route('home')->with('success', 'Deposit Successful.');
    }
}
