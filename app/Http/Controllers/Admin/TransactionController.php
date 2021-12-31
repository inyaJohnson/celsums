<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Http\Requests\TransactionUpdateRequest;
use App\Models\Transaction;
use App\Models\User;
use App\Traits\HashId;

class TransactionController extends Controller
{
    use HashId;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $transactions = Transaction::latest()->get();
        return view('admin.transactions.index', compact('transactions'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id){
        $user = User::find($this->decrypt($id));
        return view('admin.transactions.create', compact('user'));
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
        return redirect()->route('transactions.index')->with('success', 'Payment created successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $transaction = Transaction::find($this->decrypt($id));
        return view('admin.transactions.edit', compact('transaction'));
    }


    /**
     * @param TransactionUpdateRequest $request
     * @param $id
     * @return $this
     */

    public function update(TransactionUpdateRequest $request, $id){
        $transaction = Transaction::find($this->decrypt($id));
        $transaction->update($request->all());
        $user = $transaction->user;
        $newBalance = $user->finance->current_balance + $request->amount;
        $user->finance()->update(['current_balance' => $newBalance]);
        return redirect()->route('transactions.index')->with('success', 'Payment updated successfully');
    }
}
