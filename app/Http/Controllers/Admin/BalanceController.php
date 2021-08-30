<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BalanceRequest;
use App\Models\User;
use App\Traits\HashIds;

class BalanceController extends Controller
{
    use HashIds;

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
        if($request->type == 'product'){
            $currentBalance = $user->finance->current_balance;
            $newBalance = $currentBalance + $request->amount;
            $data = ['current_balance' => $newBalance, 'previous_balance'=>$currentBalance ];
        }else{
            $currentBalance = $user->finance->stock;
            $newBalance = $currentBalance + $request->amount;
            $data = ['stock' => $newBalance];
        }
        $user->finance()->update($data);
        return redirect()->route('home')->with('success', $user->first_name .' '.'Balance updated successfully');
    }
}
