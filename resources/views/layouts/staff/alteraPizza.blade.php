@extends('layouts.mainstaff')

@section('content')
    <form action="/staff/salvaNovaPizza" method="POST">
        <div class="card-body">
            <h4 class="card-title">Nova Pizza</h4>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nome</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nome" placeholder="nome" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Valor</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="valor" placeholder="valor">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">URL Imagem</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nome" placeholder="url">
                </div>
            </div>
    </form>
    <div class="border-top">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
    
@endsection
