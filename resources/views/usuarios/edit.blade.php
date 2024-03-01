@extends('layouts.app')

@section('content')
    <h1>Editar Usuário</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $usuario->nome }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $usuario->email }}" required>
        </div>

        <div>
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto">
        </div>

        @if ($usuario->foto)
            <div>
                <p>Foto Atual:</p>
                <img src="{{ asset($usuario->foto) }}" alt="Foto do Usuário" width="100">
            </div>
        @endif

        <button type="submit">Atualizar</button>
    </form>
@endsection
