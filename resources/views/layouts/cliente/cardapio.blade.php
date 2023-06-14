@extends('layouts.maincliente')

@section('content')
    <div class="about_section layout_padding">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Pizza</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Imagem</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pizzas as $pizza)
                    <tr>
                        <th scope="row">{{ $pizza->id }}</th>
                        <td>{{ $pizza->nome }}</td>
                        <td>{{ $pizza->valor }}</td>
                        <td> <img width="100px" height="100px" src="{{ $pizza->src }}"> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection ('content')
