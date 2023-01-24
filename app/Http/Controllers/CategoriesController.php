<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategories;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.categories.index',['category' => Categories::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategories $request)
    {
        //validate the data from the StoreCategories
        $validated = $request->validated();

        //store data in the database
        $category = Categories::create($validated);

        //flash message
        session()->flash('status', 'A new ingredient category has been created');

        //redirect
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //method to display a single category
        return view('admin.categories.show', ['category' => Categories::findOrFail($id)]);
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
        return view('admin.categories.edit', ['category' => Categories::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategories $request, $id)
    {
        //
        //make sure id exists
        $category = Categories::findOrFail($id);

        //return an array of validated data
        $validated = $request->validated();
        $category->fill($validated);
        $category->save();

        session()->flash('status', 'Ingredient category has been updated successfully');
        return redirect()->route('categories.index');
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
        $category = Categories::findOrFail($id);
        $category->delete();
        session()->flash('status', 'Ingredient origin has been deleted successfully');
        return redirect()->route('categories.index');
    }
}
