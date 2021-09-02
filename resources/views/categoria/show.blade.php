<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>show</title>
</head>
<body>
    <h2>visualizar</h2>

<p>ID:          {{$categoria->id}}         </p>
<p>NOME:        {{$categoria->nome}}       </p>
{{-- <p>DESCRIÇÃO:   {{$categoria->descricao}}  </p> --}}
<p>CRIAÇÃO:     {{Carbon\Carbon::parse($categoria->created_at)->format('d/m/y H:i') }} </p>
<p>MODIFICAÇÃO: {{Carbon\Carbon::parse($categoria->updated_at)->format('d/m/y H:i') }} </p>
</body>
</html>