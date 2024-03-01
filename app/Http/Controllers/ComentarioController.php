<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentarios.index', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comentarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'imovel_id' => 'required|exists:imoveis,id',
        'texto' => 'required|string',
    ]);

        Comentario::create([
            'imovel_id' => $request->imovel_id,
            'usuario_id' => auth()->id(), 
            'texto' => $request->texto,
            'nota' => $request->nota, // Adicionando a nota
        ]);

    return redirect()->back()->with('success', 'Comentário enviado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {
        return view('comentarios.show', compact('comentario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentario $comentario)
    {
        return view('comentarios.edit', compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {
        $request->validate([
            'texto' => 'required|string',
            'nota' => 'required|numeric|min:1|max:5',
        ]);

        $comentario->update($request->all());

        return redirect()->route('comentarios.index')->with('success', 'Comentário atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return redirect()->route('comentarios.index')->with('success', 'Comentário excluído com sucesso.');
    }
}
