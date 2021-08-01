<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Stock;
use App\Models\Transaction;
use App\Models\User;
use App\Traits\HashIds;

class StockTransactionController extends Controller
{
    use HashIds;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $transactions = Transaction::latest()->where('type', 'stock')->get();
        return view('admin.stock.payment.index', compact('transactions'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id){
        $user = User::find($this->decode($id));
        return view('admin.stock.payment.create', compact('user'));
    }


    /**
     * @param TransactionRequest $request
     * @return $this
     */
    public function store(TransactionRequest $request){
        Transaction::create($request->all());
        $user = User::find($request->user_id);
        $newBalance = $user->finance->stock + $request->amount;
        $user->finance->update(['stock' => $newBalance]);
        return redirect()->route('stock-payment.index')->with('success', 'Payment created successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $stocks = Stock::all();
        $transaction = Transaction::find($this->decode($id));
        return view('admin.stock.payment.edit', compact('transaction', 'stocks'));
    }

    /**
     * @param TransactionRequest $request
     * @param $id
     * @return $this
     */
    public function update(TransactionRequest $request, $id){
        $transaction = Transaction::find($this->decode($id));
        $transaction->update($request->all());
        $user = User::find($request->user_id);
        $newBalance = ($user->finance->stock - $request->prev_amount) + $request->amount;
        $user->finance->update(['stock' => $newBalance]);
        return redirect()->route('stock-payment.index')->with('success', 'Payment updated successfully');
    }

}
