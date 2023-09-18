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
        $user = Auth::User();
        $bezerros = Bezerro::all();

        return view('cms.animais.bezerro.index', compact('bezerros', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        $vacas = Vaca::all();
        return view('cms.animais.bezerro.create', compact('vacas', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::User();

        Bezerro::create([
            'brinco' => $request->brinco,
            'cor_brinco' => $request->cor_brinco,
            'sexo' => $request->sexo,
            'procedencia' => $request->procedencia,
            'mae' => $request->mae,
            'data_nascimento' => $request->data_nascimento,
            'raca' => $request->raca,
            'peso_nascimento' => $request->peso_nascimento,
            'peso_atual' => $request->peso_atual,
            'peso_desmame' => $request->peso_desmame,
            'preco_compra' => $request->preco_compra,
            'desmame' => $request->desmame,
            'fazenda' => $request->fazenda,
            'vacinas' => $request->vacinas,
            'observacoes' => $request->observacoes,
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
        $vacas = Vaca::all();
        $bezerro = Bezerro::findOrFail($id);

        return view('cms.animais.bezerro.edit', compact('vacas', 'user', 'bezerro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::User();
        $bezerro = Bezerro::findOrFail($id);

        $bezerro->update([
            'brinco' => $request->brinco,
            'cor_brinco' => $request->cor_brinco,
            'sexo' => $request->sexo,
            'procedencia' => $request->procedencia,
            'mae' => $request->mae,
            'data_nascimento' => $request->data_nascimento,
            'raca' => $request->raca,
            'peso_nascimento' => $request->peso_nascimento,
            'peso_atual' => $request->peso_atual,
            'peso_desmame' => $request->peso_desmame,
            'preco_compra' => $request->preco_compra,
            'desmame' => $request->desmame,
            'fazenda' => $request->fazenda,
            'vacinas' => $request->vacinas,
            'observacoes' => $request->observacoes,
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
