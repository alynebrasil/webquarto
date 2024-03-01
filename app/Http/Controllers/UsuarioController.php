<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/fotos');
        }

        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->foto = $fotoPath;
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuário criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email,' . $usuario->id,
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPath = $usuario->foto;
        if ($request->hasFile('foto')) {
            Storage::delete($usuario->foto);
            $fotoPath = $request->file('foto')->store('public/fotos');
        }
        
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->foto = $fotoPath;
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso.');
    }
}
