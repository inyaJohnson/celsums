<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use App\Traits\HashIds;
use App\Models\User;

class ProductTransactionController extends Controller
{
    use HashIds;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $transactions = Transaction::latest()->where('type', 'product')->get();
        return view('admin.product.index', compact('transactions'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id){
        $user = User::find($this->decode($id));
        return view('admin.product.create', compact('user'));
    }

    /**
     * @param TransactionRequest $request
     * @return $this
     */

    public function store(TransactionRequest $request){
        Transaction::create($request->all());
        $user = User::find($request->user_id);
        $prevBalance =  $user->finance->current_balance;
        $newBalance = $prevBalance + $request->amount;
        $user->finance->update(['current_balance' => $newBalance, 'previous_balance' => $prevBalance]);
        return redirect()->route('payment.index')->with('success', 'Payment created successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $transaction = Transaction::find($this->decode($id));
        return view('admin.product.edit', compact('transaction'));
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
        $newBalance = ($user->finance->current_balance - $request->prev_amount) + $request->amount;
        $user->finance->update(['current_balance' => $newBalance]);
        return redirect()->route('payment.index')->with('success', 'Payment updated successfully');
    }

}
