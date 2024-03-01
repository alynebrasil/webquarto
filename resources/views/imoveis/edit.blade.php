@extends('layouts.app')

@section('content')
    <h1>Editar Imóvel</h1>

    <form action="{{ route('imoveis.update', $imovel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="{{ $imovel->titulo }}" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required>{{ $imovel->descricao }}</textarea>
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="{{ $imovel->endereco }}" required>
        </div>
        <div>
        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
        <option value="casa" {{ $imovel->tipo === 'casa' ? 'selected' : '' }}>Casa</option>
        <option value="apartamento" {{ $imovel->tipo === 'apartamento' ? 'selected' : '' }}>Apartamento</option>
        <option value="republica" {{ $imovel->tipo === 'republica' ? 'selected' : '' }}>República</option>
    </select>
</div>
        <div>
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" value="{{ $imovel->preco }}" required>
        </div>
        <div>
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" accept="image/*">
            @if ($imovel->foto)
                <img src="{{ asset('storage/' . $imovel->foto) }}" alt="Foto do Imóvel" style="max-width: 200px;">
            @else
                <p>Sem foto</p>
            @endif
        </div>
        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('imoveis.index') }}">Voltar</a>
@endsection
