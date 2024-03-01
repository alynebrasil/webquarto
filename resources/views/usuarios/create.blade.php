@extends('layouts.app')

@section('content')
    <h1>Criar Novo Usuário</h1>

    <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto">
        </div>
        <div>
            <button type="submit">Criar Usuário</button>
        </div>
    </form>

    <a href="{{ route('usuarios.index') }}">Voltar para a lista de usuários</a>
@endsection
