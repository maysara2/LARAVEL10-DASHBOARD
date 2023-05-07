<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $reviews = Review::all();
        // return view('admin.review.index',compact('reviews'));
        return view('admin.review.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|min:4',
        //     'job' => 'required',
        //     'description' => 'required|min:10|max:255',
        //     'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        // $review = new Review();
        // $review->name = $validated['name'];
        // $review->job = $validated['job'];
        // $review->description = $validated['description'];

        // if($request->hasfile('image')){
        //     $get_file = $request->file('image')->store('images/reviewers');
        //     $review->image = $get_file;
        // }

        // $review->save();
        // return to_route('admin.review.index')->with('message','Review Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // لازم اغير الid الي review
        //return view('admin.review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $validated = $request->validate([
        //     'name' => 'required|min:4',
        //     'job' => 'required',
        //     'description' => 'required|min:10|max:255',
        //     'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        // $review->name = $validated['name'];
        // $review->job = $validated['job'];
        // $review->description = $validated['description'];

        // if($request->hasfile('image')){
        //     if($review->image != null ){
        //     Storage::delete($review->image);
        //     }
        //     $get_new_file = $request->file('image')->store('images/reviewers');
        //     $review->image = $get_new_file;
        // }

        // $review->update();
        // return to_route('admin.review.index')->with('message','Review Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
     {
    //     if($review->image != null){
    //         Storage::delete($review->image);
    //     }
    //     $review -> delete();
    //     return back()->with('message', 'Review Deleted');
     }
}
