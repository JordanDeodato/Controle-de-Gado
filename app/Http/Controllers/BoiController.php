<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Boi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bois = Boi::all();
        $user = Auth::User();

        return view('animal.boi.index', compact('user', 'bois'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        return view('animal.boi.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::User();

        Boi::create([
            'identificacao' => $request->identificacao,
            'peso' => $request->peso,
            'animal' => $request->animal,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'vacinas' => $request->vacinas,
        ]);

        return redirect()->route('boi.index', compact('user'));
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
        $user =  Auth::User();
        $boi = Boi::findOrFail($id);

        return view('animal.boi.edit', compact('user', 'boi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user =  Auth::User();
        $boi = Boi::findOrFail($id);

        $boi->update([
            'identificacao' => $request->identificacao,
            'peso' => $request->peso,
            'animal' => $request->animal,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'vacinas' => $request->vacinas,
        ]);

        return redirect()->route('boi.index', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Boi::findOrFail($id)->delete();
        return redirect()->route('boi.index');
    }
}
