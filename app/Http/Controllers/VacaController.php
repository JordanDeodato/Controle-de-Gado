<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Vaca;

class VacaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacas = Vaca::all();
        $user = Auth::User();

        return view('cms.animais.vaca.index', compact('vacas', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        return view('cms.animais.vaca.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::User();
        Vaca::create([
            'brinco' => $request->brinco,
            'cor_brinco' => $request->cor_brinco,
            'categoria' => $request->categoria,
            'procedencia' => $request->procedencia,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'preco_compra' => $request->preco_compra,
            'paricoes' => $request->paricoes,
            'data_primeira_cria' => $request->data_primeira_cria,
            'data_ultima_cria' => $request->data_ultima_cria,
            'fazenda' => $request->fazenda,
            'vacinas' => $request->vacinas,
            'observacoes' => $request->observacoes,
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

        return view('cms.animais.vaca.edit', compact('vaca', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::User();
        $vaca = Vaca::findOrFail($id);

        $vaca->update([
            'brinco' => $request->brinco,
            'cor_brinco' => $request->cor_brinco,
            'categoria' => $request->categoria,
            'procedencia' => $request->procedencia,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'preco_compra' => $request->preco_compra,
            'paricoes' => $request->paricoes,
            'data_primeira_cria' => $request->data_primeira_cria,
            'data_ultima_cria' => $request->data_ultima_cria,
            'fazenda' => $request->fazenda,
            'vacinas' => $request->vacinas,
            'observacoes' => $request->observacoes,
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
