<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imoveis = Imovel::all();
        return view('imoveis.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'endereco' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        Imovel::create($request->all());

        return redirect()->route('imoveis.index')
            ->with('success', 'Imóvel criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function show(Imovel $imovel)
    {
        return view('imoveis.show', compact('imovel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function edit(Imovel $imovel)
    {
        return view('imoveis.edit', compact('imovel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imovel $imovel)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'endereco' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        $imovel->update($request->all());

        return redirect()->route('imoveis.index')
            ->with('success', 'Imóvel atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imovel $imovel)
    {
        $imovel->delete();

        return redirect()->route('imoveis.index')
            ->with('success', 'Imóvel excluído com sucesso.');
    }
}
