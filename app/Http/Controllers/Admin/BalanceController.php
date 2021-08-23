<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BalanceRequest;
use App\Traits\Encrypt;
use App\User;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    use Encrypt;

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $user = User::find($this->decode($id));
        return view('admin.balance.edit', compact('user'));
    }


    /**
     * @param BalanceRequest $request
     * @param $id
     * @return $this
     */
    public function update(BalanceRequest $request, $id){
        $user = User::find($this->decode($id));
        $currentBalance = $user->finance->current_balance;
        $newBalance = $currentBalance + $request->amount;
        $user->finance->update(['current_balance' => $newBalance, 'previous_balance'=>$currentBalance ]);
        return redirect()->route('home')->with('success', $user->first_name .' '.'Balance updated successfully');
    }
}