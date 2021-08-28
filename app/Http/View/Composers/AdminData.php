<?php


namespace App\Http\View\Composers;

use App\Payment;
use App\Stock;
use App\StockPayment;
use App\User;
use Hashids\Hashids;
use Illuminate\View\View;

class AdminData
{
    public function compose(View $view)
    {
        $hashIds = new Hashids('capinvestmentfund', '32');
        $availableStock = \App\Models\Stock::all();
        return $view->with(['hashIds' => $hashIds, 'availableStock' => $availableStock]);
    }
}
