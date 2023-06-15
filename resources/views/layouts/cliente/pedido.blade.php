@extends('layouts.maincliente')

@section('content')

<form action="/cliente/salvaNovoPedido" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nome</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nome" placeholder="nome">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Endereco</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="endereco" placeholder="endereco">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Dados do Pedido</label>
                <div class="col-sm-9">
                    <input type="area" class="form-control" name="pedido" placeholder="pedido">
                </div>
            </div>
            <div class="border-top">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Fazer Pedido</button>
        </div>
    </form>
    </div>

@endsection