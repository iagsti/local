@extends('main')

@section('title')
    Novo Local
@endsection

@section('content')

    <div class="border-4 border-top border-primary shadow-sm">
        <div class="card border-light">
            <div class="card-header text-primary h4">
                Adicionar Novo Local
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="local-nome" class="form-label fw-bold text-primary">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="local-nome" aria-describedby="NomeLocal">
                    </div>

                    <div class="mb-3">
                        <label for="local-bloco" class="form-label fw-bold text-primary">Bloco:</label>
                        <select name="bloco" class="form-select" id="local-bloco">
                            <option value="0">Não se aplica</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="PRINCIPAL">PRINCIPAL</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="local-pavimento" class="form-label fw-bold text-primary">Pavimento:</label>
                        <select name="pavimento" class="form-select" id="local-pavimento">
                            <option value="0">Não se aplica</option>
                            <option value="terreo">Primeiro</option>
                            <option value="primeiro">Segundo</option>
                            <option value="segundo">Terceiro</option>
                            <option value="terceiro">Quarto</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="local-departamento" class="form-label fw-bold text-primary">Departamento:</label>
                        <select name="departamento" class="form-select" id="local-departamento">
                            <option value="0">Não se aplica</option>
                            <option value="astronomia">Astronomia</option>
                            <option value="atmosfericas">Ciências Atmosféricas</option>
                            <option value="geofisica">Geofísica</option>
                            <option value="adm">Administração</option>
                            <option value="biblioteca">Biblioteca</option>
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
