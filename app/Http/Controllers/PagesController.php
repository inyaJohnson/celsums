<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function welcome() {
        $reviews = Review::inRandomOrder()->take(5)->get();
        return view('welcome', compact('reviews'));
    }

    public function about(){
        return view('pages.about');
    }

    public function investment(){
        return view('pages.investment');
    }

    public function legal(){
        return view('pages.legal');
    }

    public function contactUs(){
        return view('contact_us');
    }

    public function contact(ContactRequest $request){
        $email = Mail::to('info@capinvestmentfund.com');
        $message = ['success' => 'Email sent successfully'];
        try {
            $email->send( new ContactMail($request->all()));
        }catch (\Exception $e){
            $message = ['error' => $e->getMessage()];
        }
        return redirect()->back()->with($message);
    }

}
