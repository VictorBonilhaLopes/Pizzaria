@extends('layouts.mainstaff')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title m-b-0">Pizzas</h1>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Pizza</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pizzas as $pizza)
                        <tr>
                            <th scope="row">{{ $pizza->id }}</th>
                            <td>{{ $pizza->nome }}</td>
                            <td>{{ $pizza->valor }}</td>
                            <td> <img width="100px" height="100px" src="{{ $pizza->src }}"> </td>
                            <td><a href="/staff/alteraPizza/{{$pizza->id}}"><button type="button">Atualizar</button></a></td>
                            <td><a href="/staff/excluirPizza/{{$pizza->id}}"><button type="button">Excluir</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="/staff/novaPizza"><button type="button" class="btn btn-primary">Nova Pizza</button></a>
    </div>
@endsection
