<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get(['id', 'name']);
        return view('events.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('store'), $image);

        $data = ['image' => $image, 'user_id' => auth()->id(), 'slug' => strtolower(Str::slug($request->name, '-'))];
        Event::create($request->except('image') + $data);
        return response()->json(['success' => true, 'message' => 'Event Created Successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        if (isset($request->image)) {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('store'), $image);
        }
        $data = ['image' => $image ?? $event->image, 'user_id' => auth()->id(), 'slug' => strtolower(Str::slug($request->name, '-'))];
        $event->update($request->except('image') + $data);
        return response()->json(['success' => true, 'message' => 'Event Updated Successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return response()->json(['success' => true, 'message' => 'Event Deleted Successfully.']);
    }

    public function adminIndex()
    {
        $events = Event::all();
        return view('events.admin_index', compact('events'));
    }

    public function adminShow(Event $event)
    {
        return view('events.admin_show', compact('event'));
    }
}
