<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lista;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listas = Lista::all();
        return view('lista.index', ['listas' => $listas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lista.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_creacion' => 'required|date',
        ]);

        Lista::create($request->all());

        return redirect()->route('lista.index')
            ->with('success', 'Lista creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lista = Lista::findOrFail($id);
        return view('lista.show', compact('lista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lista = Lista::findOrFail($id);
        return view('lista.edit', compact('lista'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_creacion' => 'required|date',
        ]);

        $lista = Lista::findOrFail($id);
        $lista->update($request->all());

        return redirect()->route('lista.index')
            ->with('success', 'Lista actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lista = Lista::findOrFail($id);
        $lista->delete();

        return redirect()->route('lista.index')
            ->with('success', 'Lista eliminada exitosamente.');
    }

    public function __invoke()
    {
        $listas = Lista::all();
        return view('lista.index', ['listas' => $listas]);
    }
}

