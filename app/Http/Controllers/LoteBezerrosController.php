<?php

namespace App\Http\Controllers;

use App\Models\LoteBezerro;
use Illuminate\Http\Request;

class LoteBezerrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bezerro = LoteBezerro::where("bezerro_id", $request->bezerro_id)->first();
        if (!$bezerro) {
            LoteBezerro::create([
                'lote_id' => $request->lote_id,
                'bezerro_id' => $request->bezerro_id
            ]);
        } else {
            LoteBezerro::where('bezerro_id', $request->bezerro_id)->delete();
        }

        return response()->json([
            'success' => true,
            'bezerro' => $bezerro
        ]);
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
        LoteBezerro::where('bezerro_id', $id)->delete();
        return redirect()->back();
    }
}
