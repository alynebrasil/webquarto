@extends('layouts.app')

@section('content')
    <h1>Detalhes do Imóvel</h1>

    <div>
        <h2>{{ $imovel->titulo }}</h2>
        <p><strong>Descrição:</strong> {{ $imovel->descricao }}</p>
        <p><strong>Endereço:</strong> {{ $imovel->endereco }}</p>
        <p><strong>Tipo:</strong> {{ $imovel->tipo }}</p>
        <p><strong>Preço:</strong> R$ {{ $imovel->preco }}</p>
        <p><strong>Imagem:</strong></p>
        @if($imovel->imagem)
            <img src="{{ asset('storage/' . $imovel->imagem) }}" alt="Imagem do Imóvel">
        @else
            <p>Nenhuma imagem disponível</p>
        @endif
    </div>

<h2>Novo Comentário</h2>
<form action="{{ route('comentarios.store') }}" method="POST">
    @csrf
    <input type="hidden" name="imovel_id" value="{{ $imovel->id }}">
    <input type="hidden" name="usuario_id" value="{{ auth()->id() }}"> <!-- Assume que o usuário está autenticado -->
    <label for="texto">Comentário:</label>
    <textarea name="texto" id="texto" required></textarea>
    <label for="nota">Nota:</label>
    <input type="number" name="nota" id="nota" min="1" max="5" required>
    <button type="submit">Enviar</button>
</form>


    <a href="{{ route('imoveis.index') }}">Voltar</a>


@endsection
