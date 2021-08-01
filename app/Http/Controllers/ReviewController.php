<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;
use App\Traits\HashIds;

class ReviewController extends Controller
{
    use HashIds;

    public function __construct()
    {
        $this->middleware(['admin', 'auth'])->except(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('review');
    }

    /**
     * @param ReviewRequest $request
     * @return $this
     */
    public function store(ReviewRequest $request)
    {
        Review::create($request->all());
        return back()->with('success', 'Review sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $review = Review::find($this->decode($id));
        return view('admin.review.edit', compact('review'));
    }


    /**
     * @param UpdateReviewRequest $request
     * @param $id
     * @return $this
     */
    public function update(UpdateReviewRequest $request, $id){
        $review = Review::find($this->decode($id));
        $review->update($request->all());
        return redirect()->route('reviews.index')->with('success', 'Review updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
