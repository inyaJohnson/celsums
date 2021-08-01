<?php

namespace App\Http\Controllers;

use App\Http\Requests\WithdrawalRequest;
use App\Mail\Withdrawal;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    public function index()
    {
        return view('withdrawal.index');
    }

    public function withdrawalRequest(WithdrawalRequest $request)
    {
        $message = ['success' => 'Your request successful, it will be processed within 24hrs. '];
        if ($request->amount > auth()->user()->finance->current_balance) {
            $message = ["error" => "Sorry you can't withdraw more than your available balance."];
            return redirect()->back()->with($message);
        }
        $email = Mail::to('payment@capinvestmentfund.com');
        $email->bcc(auth()->user()->email);
        try {
            $email->send(new Withdrawal($request->all()));
        } catch (\Exception $e) {
            $message = ['error' => $e->getMessage()];
        }
        $prevBalance = auth()->user()->finance->current_balance;
        $newBalance = $prevBalance - $request->amount;
        auth()->user()->finance->update(['current_balance' => $newBalance, 'previous_balance' => $prevBalance]);
        return redirect()->back()->with($message);
    }
}
