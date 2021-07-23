@extends('main')

@section('title')
    | <span class="text-secondary">Locais</span>
@endsection

@section('content')
    <div class="border-4 border-top border-primary shadow-sm">
        <div class="card border-light">
            <div class="card-header text-primary h4">
                Lista de locais
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Bloco</th>
                            <th scope="col">Pavimento</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locals as $row)
                            <tr>
                                <td>{{ $row->nome }}</td>
                                <td>{{ $row->bloco }}</td>
                                <td>{{ $row->pavimento }}</td>
                                <td>{{ $row->departamento }}</td>
                                <td>
                                    <a href="{{ route('local.edit', ['local' => $row->id]) }}"
                                        class="btn btn-outline-primary" role="button">
                                        <i class="bi bi-pencil-square"></i>
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $locals->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
