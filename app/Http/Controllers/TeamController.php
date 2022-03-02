<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('store'), $image);

        $data = ['image' => $image, 'user_id' => auth()->id()];
        Team::create($request->except('image') + $data);
        return response()->json(['success' => true, 'message' => 'Team Member Uploaded Successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, Team $team)
    {
        if (isset($request->image)) {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('store'), $image);
        }
        $data = ['image' => $image ?? $team->image];
        $team->update($request->except('image') + $data);
        return response()->json(['success' => true, 'message' => 'Info Updated Successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return response()->json(['success' => true, 'message' => 'Team Member Deleted Successfully.']);
    }


    public function adminIndex()
    {
        $teams = Team::all();
        return view('teams.admin_index', compact('teams'));
    }
}
