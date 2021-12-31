<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Mail\Email;
use App\Models\User;
use App\Traits\HashId;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    use HashId;

    public function createEmail($id){
        $user = User::find($this->decrypt($id));
        return view('admin.email.create', compact('user'));
    }

    public function sendEmail(EmailRequest $request){
        $email = Mail::to($request->to);
        if(isset($request->copy)){
            $email->bcc(auth()->user()->email);
        }
        $message = ['success' => 'Email sent successfully'];
        try {
            $email->send( new Email($request->all()));
        }catch (\Exception $e){
            $message = ['error' => $e->getMessage()];
        }
        return redirect()->back()->with($message);
    }
}
