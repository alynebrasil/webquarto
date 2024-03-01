@extends('layouts.app')

@section('content')
    <h1>Detalhes do Usuário</h1>

    <ul>
        <li><strong>ID:</strong> {{ $usuario->id }}</li>
        <li><strong>Nome:</strong> {{ $usuario->nome }}</li>
        <li><strong>Email:</strong> {{ $usuario->email }}</li>
        @if($usuario->foto)
            <li><img src="{{ asset('storage/' . $usuario->foto) }}" alt="Foto do Usuário"></li>
        @else
            <li><em>Sem foto</em></li>
        @endif
    </ul>

    <a href="{{ route('usuarios.index') }}">Voltar para a lista de usuários</a>
@endsection