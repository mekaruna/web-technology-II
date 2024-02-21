<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChefRequest;
use App\Http\Requests\UpdateChefRequest;
use App\Models\Chef;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Chef::all();
        return view('admin.chef.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chef.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChefRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChefRequest $request)
    {
        $chef = new Chef();
        $chef->fill($request->all());
        $chef->saveOrFail();

        return redirect()->route('chefs.index')->with('success', 'Chef created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        return view('admin.chef.show', ['chef' => $chef]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        return view('admin.chef.edit', ['chef' => $chef]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChefRequest  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChefRequest $request, Chef $chef)
    {
        $chef->update($request->all());
        return redirect()->route('chefs.index')->with('success', 'Chef updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        $chef->delete();
        return redirect()->route('chefs.index')->with('success', 'Chef deleted successfully.');
    }
}
