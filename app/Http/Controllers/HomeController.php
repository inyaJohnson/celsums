<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogCount = Blog::get()->count();
        $eventCount = Event::get()->count();
        $faqCount = Faq::get()->count();
        $galleryCount = Gallery::get()->count();
        $teamMemberCount = Team::get()->count();

        $users = User::where('role_id', '!=', 1)->get();
        $userCount = $users->count();
        $view = view('admin.home', compact('users', 'blogCount', 'faqCount', 'eventCount', 'galleryCount', 'userCount', 'teamMemberCount'));

        if(!auth()->user()->hasRole('admin')){
            $user = auth()->user();
            $view = view('home', compact('user', 'blogCount', 'faqCount', 'eventCount', 'galleryCount'));
        }
        return $view;
    }
}
