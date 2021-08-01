<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\HashIds;

class UserController extends Controller
{
    use HashIds;

    public function destroy($id){
        $data = ['success' => 'User deleted successfully'];
        $user = User::find($this->decode($id));
        $result = $user->delete($id);
        if (!$result){
            $data = ['error' => 'Unable to delete user'];
        }
        return response()->json($data);
    }

    public function index()
    {
        $users = User::latest()->get();
        return view('admin.users.index', compact('users'));
    }

    public function verify($id){
        $user = User::find($id);
        $user->update(['verified' => 1]);
        return back()->with('success', $user->first_name.' '. $user->last_name. ' is now verified.');
    }
}
