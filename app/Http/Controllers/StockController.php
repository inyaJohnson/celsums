<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class StockController extends Controller
{
    public function index()
    {
//        Available stock
        $availableStock = Stock::pluck('symbol')->toArray();
        $symbols = implode(',', $availableStock);
        $availableStockRecord = Http::get('https://mboum.com/api/v1/qu/quote/?symbol='.$symbols.'&apikey=mhHxdqTkLwqMLbuElqRdnTbUE1UTgjzhr8S1fbphNTLMGi2XM7q11xDSdW6d');
        $stocks = $availableStockRecord->json();

//        stocks invested in
        $userStockPayment = auth()->user()->transactions()->where('type', 'stock');
        $numberOfStocks = $userStockPayment->count();
        $userStockSymbols = implode(',', $userStockPayment->pluck('stock_name')->unique()->toArray());
        $userStocks = Http::get('https://mboum.com/api/v1/qu/quote/?symbol='.$userStockSymbols.'&apikey=mhHxdqTkLwqMLbuElqRdnTbUE1UTgjzhr8S1fbphNTLMGi2XM7q11xDSdW6d');
        $dayChange = array_sum(Arr::pluck($userStocks->json(), 'regularMarketChange'));
        $dayChangePercent = array_sum(Arr::pluck($userStocks->json(), 'regularMarketChangePercent'));
        $userStockPaymentTotal = auth()->user()->finance->stock;
        $totalGain = 0;
        if($numberOfStocks != 0){
            $totalGain = ($userStockPaymentTotal * $dayChangePercent)/$numberOfStocks;
        }
        return view('stock.index',
            compact('stocks','dayChange', 'dayChangePercent', 'totalGain'));
    }
}
