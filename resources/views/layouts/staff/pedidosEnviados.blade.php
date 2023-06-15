@extends('layouts.mainstaff')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Pedidos Enviados</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome Cliente</th>
                        <th scope="col">Endereco</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pedidos as $pedido)
                        <tr>
                            <th scope="row">{{ $pedido->id }}</th>
                            <td>{{ $pedido->nome }}</td>
                            <td>{{ $pedido->endereco }}</td>
                            <td>{{ $pedido->pedido }}</td>
                            <td>
                                @if ($pedido->status == 0)
                                    N Enviado
                                @else
                                    Enviado
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection