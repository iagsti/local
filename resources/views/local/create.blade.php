@extends('main')

@section('title')
    | <span class="text-secondary">Novo Local</span>
@endsection

@section('content')

    <div class="border-4 border-top border-primary shadow-sm">
        <div class="card border-light">
            <div class="card-header text-primary h4">
                Adicionar Novo Local
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('local.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="local-nome" class="form-label fw-bold text-primary">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="local-nome" aria-describedby="NomeLocal">
                    </div>

                    <div class="mb-3">
                        <label for="local-bloco" class="form-label fw-bold text-primary">Bloco:</label>
                        <select name="bloco" class="form-select" id="local-bloco">
                            @foreach ($blocos as $option)
                                <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="local-pavimento" class="form-label fw-bold text-primary">Pavimento:</label>
                        <select name="pavimento" class="form-select" id="local-pavimento">
                            @foreach ($pavimentos as $option)
                                <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="local-departamento" class="form-label fw-bold text-primary">Departamento:</label>
                        <select name="departamento" class="form-select" id="local-departamento">
                            @foreach ($departamentos as $option)
                                <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="local-descricao" class="form-label fw-bold text-primary">Descricao:</label>
                        <textarea name="descricao" class="form-control" id="local-descricao" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
