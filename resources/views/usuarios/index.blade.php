@extends('layouts.app')

@section('content')
    <h1>Lista de Usuários</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <a href="{{ route('usuarios.show', $usuario->id) }}">Ver</a>
                    <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>

                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
     <a href="{{ route('usuarios.create') }}">Adicionar Usuário</a>
@endsection