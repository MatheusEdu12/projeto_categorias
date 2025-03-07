@extends('layouts.index', ["current" => "categorias"])

@section('body')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Categorias</h4>
            <a href="{{ route('categorias.create') }}" class="btn btn-success btn-sm">
                Nova Categoria
            </a>
        </div>

        @if ($categorias->isEmpty())
            <div class="alert alert-warning text-center" role="alert">
                Nenhuma categoria cadastrada.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 10%;">ID</th>
                            <th style="width: 60%;">Nome</th>
                            <th class="text-center" style="width: 30%;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $c)
                            <tr>
                                <td>{{ $c['id'] }}</td>
                                <td>{{ $c['nome'] }}</td>
                                <td class="text-center">
                                    <a href="{{ route('categorias.edit', ['categoria' => $c['id']]) }}" 
                                       class="btn btn-sm btn-primary">
                                        Editar
                                    </a>
                                    <form action="{{ route('categorias.destroy', $c['id']) }}" method="POST" 
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Tem certeza que deseja excluir esta categoria?');">
                                            Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

@endsection
