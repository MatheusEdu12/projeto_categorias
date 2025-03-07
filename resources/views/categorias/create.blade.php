@extends('layouts.index', ["current" => "categorias"])

@section('body')

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('categorias.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nomeCategoria" class="form-label">Nome da Categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria"
                        placeholder="Digite o nome da categoria" id="nomeCategoria" required>
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection
