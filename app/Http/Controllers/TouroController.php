<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Touro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TouroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::User();
        $touros = Touro::all();

        return view('cms.animais.touro.index', compact('touros', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        return view('cms.animais.touro.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::User();

        Touro::create([
            'brinco' => $request->brinco,
            'cor_brinco' => $request->cor_brinco,
            'peso_atual' => $request->peso_atual,
            'procedencia' => $request->procedencia,
            'raca' => $request->raca,
            'preco_compra' => $request->preco_compra,
            'mae' => $request->mae,
            'fazenda' => $request->fazenda,
            'vacinas' => $request->vacinas,
            'observacoes' => $request->observacoes
        ]);

        return redirect()->route('touro.index', compact('user'));
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
        $touro = Touro::findOrFail($id);

        return view('cms.animais.touro.edit', compact('user', 'touro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user =  Auth::User();
        $touro = Touro::findOrFail($id);

        $touro->update([
            'brinco' => $request->brinco,
            'cor_brinco' => $request->cor_brinco,
            'peso_atual' => $request->peso_atual,
            'procedencia' => $request->procedencia,
            'raca' => $request->raca,
            'preco_compra' => $request->preco_compra,
            'mae' => $request->mae,
            'fazenda' => $request->fazenda,
            'vacinas' => $request->vacinas,
            'observacoes' => $request->observacoes
        ]);

        return redirect()->route('touro.index', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Touro::findOrFail($id)->delete();
        return redirect()->route('touro.index');
    }
}
