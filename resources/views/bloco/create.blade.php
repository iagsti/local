@extends('main')

@section('title')
    | <span class="text-secondary">Novo Bloco</span>
@endsection

@section('content')

    <div class="border-4 border-top border-primary shadow-sm">
        <div class="card border-light">
            <div class="card-header text-primary h4">
                Adicionar Novo Bloco
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('bloco.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="bloco-nome" class="form-label fw-bold text-primary">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="bloco-nome" aria-describedby="NomeBloco">
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
