@extends('layouts.index', ["current" => "categorias"])

@section('body')

    <div class="container mt-4">
        <h4 class="mb-3">Editar Categoria</h4>

        <form action="{{ route('categorias.update', $categoria['id']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="novoNomeCategoria" class="form-label">Novo nome:</label>
                <input type="text" name="novoNomeCategoria" id="novoNomeCategoria" 
                       class="form-control" value="{{ $categoria['nome'] }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>

@endsection
