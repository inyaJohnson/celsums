<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Review;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function welcome() {
        $blogs = Blog::latest()->take(4)->get();
        $events = Event::latest()->take(3)->get();
        return view('welcome', compact('events', 'blogs'));
    }

    public function about(){
        $team = Team::select('first_name','last_name','image','position','facebook','youtube','twitter')->get();
        return view('templates.about', compact('team'));
    }

    public function investment(){
        return view('pages.investment');
    }

    public function contact(){
        return view('templates.contact');
    }

    public function sendContactMessage(ContactRequest $request){
        $email = Mail::to('support@celsum.com');
        $message = ['success' => 'Congratulations. Your message has been sent successfully'];
        try {
            $email->send( new ContactMail($request->all()));
        }catch (\Exception $e){
            $message = ['error' => $e->getMessage()];
        }
        return response()->json($message);
    }

    public function volunteer(){
        return view('templates.volunteer');
    }

    public function donorsAndPartners(){
        return view('templates.donors');
    }

}
