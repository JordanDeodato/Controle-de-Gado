<?php

namespace App\Http\Controllers;

use App\Models\Bezerro;
use App\Models\Lote;
use App\Models\PesoBezerro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::User();
        $lotes = Lote::all();

        return view('cms.animais.lotes.index', compact('user', 'lotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();

        return view('cms.animais.lotes.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lotes = new Lote();

        $lotes->name = $request->name;
        $lotes->save();

        return redirect()->route('lotes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::User();
        $lote = Lote::findOrFail($id);
        $bezerros = $lote->bezerros;
        $peso_count = $bezerros->sum('peso_atual');

        return view('cms.animais.lotes.show', compact('user', 'lote', 'bezerros', 'peso_count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::User();
        $lote = Lote::findOrFail($id);

        return view('cms.animais.lotes.edit', compact('user', 'lote'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lotes = Lote::findOrFail($id);

        $lotes->name = $request->name;
        $lotes->save();

        return redirect()->route('lotes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lote::findOrFail($id)->delete();
        return redirect()->route('lotes.index');
    }
}
