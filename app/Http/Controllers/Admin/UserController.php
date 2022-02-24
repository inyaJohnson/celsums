<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Jobs\VerificationJob;
use App\Models\Role;
use App\Models\User;
use App\Traits\HashId;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use HashId;

    public function destroy($id){
        $data = ['success' => 'User deleted successfully'];
        $user = User::find($this->decrypt($id));
        $result = $user->delete($id);
        if (!$result){
            $data = ['error' => 'Unable to delete user'];
        }
        return response()->json($data);
    }

    public function index()
    {
        $users = User::where('role_id', '!=', 1)->latest()->get();
        return view('admin.users.index', compact('users'));
    }


    public function verify($id){
        $user = User::find($id);
        $user->update(['verified' => 1]);
        VerificationJob::dispatch('Successful', $user);
        return back()->with('success', $user->first_name.' '. $user->last_name. ' is now verified.');
    }


    public function unverify($id){
        $user = User::find($id);
        $user->update(['verified' => 2, 'identification' => null]);
        VerificationJob::dispatch('Unsuccessful', $user);
        return back()->with('success', $user->first_name.' '. $user->last_name. ' is now unverified.');
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(RegisterRequest $request){
        $role = Role::where('name', 'user')->first();

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => $role->id
        ]);

        return redirect()->route('home')->with('success', 'User Created Successfully');
    }
}
