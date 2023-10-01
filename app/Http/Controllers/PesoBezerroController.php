<?php

namespace App\Http\Controllers;

use App\Models\Bezerro;
use App\Models\PesoBezerro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesoBezerroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::User();
        $bezerros = Bezerro::all();
        $pesoBezerros = PesoBezerro::all();

        return view('cms.relatorios.peso-bezerro.index', compact('user', 'bezerros', 'pesoBezerros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        $bezerros = Bezerro::all();

        return view('cms.relatorios.peso-bezerro.create', compact('user', 'bezerros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesoBezerro = new PesoBezerro();

        $pesoBezerro->bezerro_id = $request->bezerro_id;
        $pesoBezerro->peso = $request->peso;
        $pesoBezerro->data_pesagem = $request->data_pesagem;

        $pesoBezerro->save();

        return redirect()->route('peso-bezerro.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
