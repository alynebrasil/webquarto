@extends('layouts.app')

@section('content')
    <h1>Criar Novo Imóvel</h1>

    <form action="{{ route('imoveis.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" required>
                <option value="casa">Casa</option>
                <option value="apartamento">Apartamento</option>
                <option value="republica">República</option>
            </select>
        </div>
        <div>
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" required>
        </div>
        <div>
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" accept="image/*">
        </div>
        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('imoveis.index') }}">Voltar</a>
@endsection
