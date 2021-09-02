<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>
    <h2>visualizar</h2>

<p>ID:          {{$produto->id}}         </p>
<p>CATEGORIA:   {{$produto->categoria->nome}}         </p>
<p>NOME:        {{$produto->nome}}       </p>
<p>DESCRIÇÃO:   {{$produto->descricao}}  </p>
<p>CRIAÇÃO:     {{Carbon\Carbon::parse($produto->created_at)->format('d/m/y H:i') }} </p>
<p>MODIFICAÇÃO: {{Carbon\Carbon::parse($produto->updated_at)->format('d/m/y H:i') }} </p>
</body>
</html>