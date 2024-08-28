<?php

namespace App\Http\Controllers;

use App\Models\Clothing;
use Illuminate\Http\Request;

class ClothingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cloth = Clothing::latest()->paginate(5);
        return view('clothing.index', compact('cloth'))->with('i', (request()->input('page', 1) -1) * 5);;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clothing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'stock' => 'required|integer|min:1',
            'description' => 'required|string|max:255',
        ]);
        Clothing::create($request->all());
        return redirect()->route('clothing.index')->with('success', 'Success created new Cloth');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clothing $clothing)
    {
        return view('clothing.show', compact('clothing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clothing $clothing)
    {
        return view('clothing.edit', compact('clothing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clothing $clothing)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'stock' => 'required|integer|min:1',
            'description' => 'required|string|max:255',
        ]);
        $clothing->update($request->all());
        return redirect()->route('clothing.index')->with('success', 'Success updated a Cloth');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clothing $clothing)
    {
        $clothing->delete();
        return redirect()->route('clothing.index')->with('success', 'Success deleted a Cloth');
    }
}
