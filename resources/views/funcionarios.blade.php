<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funcionários</title>
</head>
<body>
    <h1>{{$sub}}</h1>
    <ul>
    @forelse ($funcionarios as $funcionario)
        <li>{{$funcionario}}</li>
    @empty
        <li>Não há funcionários cadastrados.</li>
    @endforelse
    </ul>
</body>
</html>
