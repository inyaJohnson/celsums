<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BalanceRequest;
use App\Models\User;
use App\Traits\HashId;
use Illuminate\Http\Exceptions\HttpResponseException;

class BalanceController extends Controller
{
    use HashId;

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $user = User::find($this->decrypt($id));
        return view('admin.balance.edit', compact('user'));
    }


    /**
     * @param BalanceRequest $request
     * @param $id
     * @return $this
     */
    public function update(BalanceRequest $request, $id){
        $user = User::find($this->decrypt($id));
        if($request->action == 'add'){
            if($request->type == 'product'){
                $currentBalance = $user->finance->current_balance;
                $newBalance = $currentBalance + $request->amount;
                $data = ['current_balance' => $newBalance, 'previous_balance'=>$currentBalance ];
            }else{
                $currentBalance = $user->finance->stock;
                $newBalance = $currentBalance + $request->amount;
                $data = ['stock' => $newBalance];
            }
        }elseif($request->action == 'reduce'){
            if($request->type == 'product'){
                $currentBalance = $user->finance->current_balance;
                if($currentBalance < $request->amount ){
                    throw new HttpResponseException(response()->redirectTo("/balance/edit/$id")->with('error', 'Insufficient Balance.'));
                }
                $newBalance = $currentBalance - $request->amount;
                $data = ['current_balance' => $newBalance, 'previous_balance'=>$currentBalance ];
            }else{
                $currentBalance = $user->finance->stock;
                if($currentBalance < $request->amount ){
                    throw new HttpResponseException(response()->redirectTo("/balance/edit/$id")->with('error', 'Insufficient Balance.'));
                }
                $newBalance = $currentBalance - $request->amount;
                $data = ['stock' => $newBalance];
            }
            $newBalance = $currentBalance - $request->amount;
        }

        $user->finance()->update($data);
        return redirect()->route('home')->with('success', $user->first_name .' '.'Balance updated successfully');
    }
}
