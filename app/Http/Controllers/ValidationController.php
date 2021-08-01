<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index(){
        return view('validation.index');
    }

    public function upload(ValidationRequest $request){
        $documentName = time() . '.' . $request->document->extension();
        $request->document->move(public_path('store'), $documentName);
        auth()->user()->update(['identification' => $documentName]);
        return redirect()->route('home')->with('success', 'Upload successful, Verification will be done within 24hrs');
    }


}
