<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrigins;
use App\Models\Origins;
use Illuminate\Http\Request;

class OriginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.origins.index', ['origin' => Origins::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.origins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrigins $request)
    {
        //validate the data from teh StoreOrigins
        $validated = $request->validated();

        //store data in the database
        $origin = Origins::create($validated);

        //flash message
        session()->flash('status', 'A new ingredient origin has been created');

        //redirect
        return redirect()->route('origins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //method to display a single origin
        return view('admin.origins.show', ['origin' => Origins::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.origins.edit', ['origin' => Origins::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrigins $request, $id)
    {
        //
        //make sure the model with the given id exists
        $origin = Origins::findOrFail($id);

        //return an array of the validated data
        $validated = $request->validated();
        $origin->fill($validated);
        $origin->save();

        session()->flash('status', 'Ingredient origin has been updated successfully');
        return redirect()->route('origins.index');
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
        $origin = Origins::findOrFail($id);
        $origin->delete();
        session()->flash('status', 'Ingredient origin has been deleted successfully');
        return redirect()->route('origins.index');

    }
}
