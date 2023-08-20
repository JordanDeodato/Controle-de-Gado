<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bezerro;
use App\Models\Vaca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BezerroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bezerros = Bezerro::all();
        $user = Auth::User();

        return view('animal.bezerro.index', compact('user', 'bezerros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        $vacas = Vaca::all();
        // $egua = Animal::all()->where('animal', 'egua');
        return view('animal.bezerro.create', compact('user', 'vacas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::User();

        Bezerro::create([
            'identificacao' => $request->identificacao,
            'peso' => $request->peso,
            'animal' => $request->animal,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'mae_id' => $request->mae_id,
            'peso_nasc' => $request->peso_nasc,
            'peso_desmame' => $request->peso_desmame,
            'vacinas' => $request->vacinas
        ]);

        return redirect()->route('bezerro.index', compact('user'));
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
        $vaca = Vaca::all();
        $bezerro = Bezerro::findOrFail($id);

        return view('animal.vaca.edit', compact('vaca', 'user', 'bezerro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::User();
        $bezerro = Bezerro::findOrFail($id);

        $bezerro->update([
            'identificacao' => $request->identificacao,
            'peso' => $request->peso,
            'animal' => $request->animal,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'mae_id' => $request->mae_id,
            'peso_nasc' => $request->peso_nasc,
            'peso_desmame' => $request->peso_desmame,
            'vacinas' => $request->vacinas
        ]);

        return redirect()->route('bezerro.index', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bezerro::findOrFail($id)->delete();
        return redirect()->route('bezerro.index');
    }
}
