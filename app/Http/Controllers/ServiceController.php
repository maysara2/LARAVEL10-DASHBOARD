<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //    $services = Service::all();
        // return view('admin.service.index', compact('services'));
            return view('admin.service.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'icon' => 'required',
        //     'name' => 'required|min:7',
        //     'description' => 'required|min:80|max:255',
        // ]);
        // Service::create($validated);
        // return to_route('admin.service.index')->with('message','New Service Added');

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
        // return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // $validated = $request->validate([
        //     'icon' => 'required',
        //     'name' => 'required|min:7',
        //     'description' => 'required|min:80|max:255',
        // ]);
        // $service->update($validated);
        // return to_route('admin.service.index')->with('message', 'Service Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //        $service->delete();
        // return back()->with('message','Service Deleted');
    }
}
