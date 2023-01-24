<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUnits;
use App\Models\Units;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.units.index', ['name' => Units::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnits $request)
    {
        //validate the data from the StoreUnits
        $validated = $request->validated();

        //store data in the database
        $name = Units::create($validated);

        //flash message
        session()->flash('status', 'A new measurement unit has been created');

        //redirect
        return redirect()->route('units.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //method to display a single unit
        return view('admin.units.show', ['name' => Units::findOrFail($id)]);
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
        return view('admin.units.edit', ['name' => Units::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUnits $request, $id)
    {
        //
        //make sure id exists
        $name = Units::findOrFail($id);

        //return an array of validated data
        $validated = $request->validated();
        $name->fill($validated);
        $name->save();

        session()->flash('status', 'Measurement unit has been updated successfully');
        return redirect()->route('units.index');
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
        $name = Units::findOrFail($id);
        $name->delete();
        session()->flash('status', 'Measurement unit has been deleted successfully');
        return redirect()->route('units.index');
    }
}
