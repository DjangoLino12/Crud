<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>
    <!-- botao criar -->
    


    <!--
    abrir tabela
    colocar cabeçalho
    listar categorias
    fechar tabela
    -->

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    <script>
        function ConfirmDelete() {
            return confirm('Deseja excluir este categoria?');
        }
    </script>

    <table class="table no-margin" class="table">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>descrição</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

          @foreach($categorias as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nome }}</td>
                {{-- <td>{{ $value->descricao }}</td> --}}
                <td>
                    <a href="{{ URL::to('categoria/' . $value->id) }}" class="btn btn-outline-primary">Visualizar</a>
                    
                </td>
                <td>
                    <a href="{{ URL::to('categoria/' . $value->id . '/edit') }}" class="btn btn-outline-warning">Editar</a>
                    
                </td>
                <td>

                    {{ Form::open(array('url'=>'categoria/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class'=> 'btn btn-outline-danger')) }}
                    {{ Form::close() }}

                </td>

                
            </tr>
           @endforeach

        </tbody>
    </table>
    <a href="{{ URL::to('categoria/create') }}" 
    class="btn btn-success"
    style="border-radius: 0px 1px 1px 0px;"><h2>Criar novo categoria</h2>
</a>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>