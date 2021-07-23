@extends('main')

@section('title')
    | <span class="text-secondary">Editar {{ $local->bloco }}-{{ $local->nome }}</span>
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
                <form action="{{ route('local.update', ['local' => $local->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="local-nome" class="form-label fw-bold text-primary">Nome:</label>
                        <input type="text" class="form-control" name="nome" value="{{ $local->nome }}" id="local-nome"
                            aria-describedby="NomeLocal">
                    </div>

                    <div class="mb-3">
                        <label for="local-bloco" class="form-label fw-bold text-primary">Bloco:</label>
                        <select name="bloco" class="form-select" id="local-bloco">
                            @foreach ($blocos as $option)
                                @if ($option['value'] === $local->bloco)
                                    <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
                                @else
                                    <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                                @endif
                            @endforeach
                            <option value="PRINCIPAL">PRINCIPAL</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="local-pavimento" class="form-label fw-bold text-primary">Pavimento:</label>
                        <select name="pavimento" class="form-select" id="local-pavimento">
                            @foreach ($pavimentos as $option)
                                @if ($option['value'] === $local->pavimento)
                                    <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
                                @else
                                    <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="local-departamento" class="form-label fw-bold text-primary">Departamento:</label>
                        <select name="departamento" class="form-select" id="local-departamento">
                            @foreach ($departamentos as $option)
                                @if ($option['value'] === $local->departamento)
                                    <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
                                @else
                                    <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="local-descricao" class="form-label fw-bold text-primary">Descricao:</label>
                        <textarea name="descricao" class="form-control" id="local-descricao" cols="30"
                            rows="10">{{ $local->descricao }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
