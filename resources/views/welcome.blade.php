<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo</h1>
    <ul>
        <li><a href="{{ route('usuarios.index') }}">Lista de Usuários</a></li>
        <li><a href="{{ route('imoveis.index') }}">Lista de Imóveis</a></li>
    </ul>
</body>
</html>
