<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vaca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $vacas = Vaca::all();
        // $user = Auth::User();

        return view('cms.animais.vaca.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = Auth::User();
        // $vaca = Vaca::all();
        // $egua = Animal::all()->where('animal', 'egua');
        return view('cms.animais.vaca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::User();
        Vaca::create([
            'identificacao' => $request->identificacao,
            'peso' => $request->peso,
            'animal' => $request->animal,
            'category' => $request->category,
            'prenha' => $request->prenha,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'procedencia' => $request->procedencia,
            'crias' => $request->crias,
            'precoCompra' => $request->precoCompra,
            'data_primeira_cria' => $request->data_primeira_cria,
            'data_ultima_cria' => $request->data_ultima_cria,
            'data_desmame' => $request->data_desmame,
            'vacinas' => $request->vacinas,
        ]);

        return redirect()->route('vaca.index', compact('user'));
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
        $vaca = Vaca::findOrFail($id);

        return view('animal.vaca.edit', compact('vaca', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::User();
        $vaca = Vaca::findOrFail($id);

        $vaca->update([
            'identificacao' => $request->identificacao,
            'peso' => $request->peso,
            'animal' => $request->animal,
            'category' => $request->category,
            'prenha' => $request->prenha,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'procedencia' => $request->procedencia,
            'crias' => $request->crias,
            'precoCompra' => $request->precoCompra,
            'data_primeira_cria' => $request->data_primeira_cria,
            'data_ultima_cria' => $request->data_ultima_cria,
            'data_desmame' => $request->data_desmame,
            'vacinas' => $request->vacinas,
        ]);

        return redirect()->route('vaca.index', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vaca::findOrFail($id)->delete();
        return redirect()->route('vaca.index');
    }
}
