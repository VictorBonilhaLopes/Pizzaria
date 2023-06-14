@extends('layouts.mainstaff')

@section('content')
    <form action="/staff/salvaNovaPizza" method="POST">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Nova Pizza</h4>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nome</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nome" placeholder="nome">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Valor</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="valor" placeholder="valor">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">URL Imagem</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="src" placeholder="url">
                </div>
            </div>
            <div class="border-top">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
    </div>
    
@endsection
