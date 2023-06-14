@extends('layouts.mainstaff')

@section('content')
    <form action="/staff/atualizaPizza" method="POST">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Editar Pizza</h4>
            <input type="hidden" name="id" value='{{$pizzas->id}}'/>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nome</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nome" placeholder="nome" value="{{ $pizzas->nome }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Valor</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="valor" placeholder="valor" value="{{ $pizzas->valor }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">URL Imagem</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="src" placeholder="url" value="{{ $pizzas->src }}">
                </div>
            </div>
    </form>
    <div class="border-top">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
    
@endsection
