<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CREATE</title>
</head>
<body>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{ Form::open(array('url' => '/categoria/create')) }}

    {{ Form::label('nome', 'Nome') }}
    {{ Form::text('nome', null) }}
    <br/>
    {{-- {{ Form::label('descricao', 'Descrição') }}
    {{ Form::text('descricao', null) }}
    <br/> --}}
    {{ Form::submit('Enviar', array('class'=> 'btn btn-outline-danger'))  }}

    {{ Form::close() }}
    
</body>
</html>