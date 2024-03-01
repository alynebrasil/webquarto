@extends('layouts.app')

@section('content')
    <h1>Lista de Imóveis</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($imoveis as $imovel)
            <tr>
                <td>{{ $imovel->id }}</td>
                <td>{{ $imovel->nome }}</td>
                <td>{{ $imovel->descricao }}</td>
                <td>
                    <a href="{{ route('imoveis.show', $imovel->id) }}">Ver</a>
                    <a href="{{ route('imoveis.edit', $imovel->id) }}">Editar</a>
                    <form action="{{ route('imoveis.destroy', $imovel->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('imoveis.create') }}">Criar Novo Imóvel</a>
@endsection
