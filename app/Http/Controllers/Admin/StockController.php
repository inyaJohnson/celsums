<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StockRequest;
use App\Models\Stock;

class StockController extends Controller
{
    public function index(){
        return view('admin.stock.index');
    }

    public function store(StockRequest $request){
        Stock::truncate();
        foreach ($request->selected_stocks as $stock){
            Stock::create([
                'symbol' => $stock
            ]);
        }
        return redirect()->route('stock.manage')->with('success', 'Selected stocks updated successfully');
    }
}
