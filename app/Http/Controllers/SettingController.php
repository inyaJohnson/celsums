<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function profile(){
        $user = auth()->user();
        $transactionCount = Transaction::where('user_id', $user->id)->count();
        return view('profile.edit', compact('user', 'transactionCount'));
    }


    public function updateProfile(ProfileUpdateRequest $request){
        $user = auth()->user();
        DB::transaction(function () use($user, $request) {
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => ($request->phone) ?? null,
            ]);
            $user->address()->updateOrCreate(['user_id' => $user->id], [
                'country' => ($request->country) ?? null
            ]);
        });
        return redirect()->back()->with('success', 'Profile Update Was Successful');
    }
}
