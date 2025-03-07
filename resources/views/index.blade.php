@extends('layouts.index', ["current" => "home"])

@section('body')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-primary shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title text-primary fw-bold">Cadastro de Categorias</h5>
                    <p class="card-text">Cadastre a categoria dos seus produtos</p>
                    <a class="btn btn-primary" href="{{ route('categorias.create') }}">Cadastrar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-primary shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title text-primary fw-bold">Cadastro de Produtos</h5>
                    <p class="card-text">Cadastre seus produtos</p>
                    <a class="btn btn-primary" href="/produtos">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
