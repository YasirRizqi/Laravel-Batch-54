<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;
class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = Cast::all();
        return view('cast.index',['cast'=>$cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cast = Cast::all();
        return view('cast.form',['cast'=>$cast]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required',
        ]);
        $cast = Cast::create($request->all());
        return redirect("/cast");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cast = Cast::findorFail($id);
        return view('cast.detail',['cast'=>$cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $castID = Cast::findorFail($id);
        return view('cast.edit',['castID'=>$castID]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $castID = Cast::findorFail($id);
        $castID->update($request->all());
        return redirect("/cast"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $castID = Cast::findorFail($id);
        $castID->delete();
        return redirect("/cast"); 
    }
}
