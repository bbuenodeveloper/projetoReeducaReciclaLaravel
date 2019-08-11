@extends('layouts.appPainel')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">

                {{-- @if (isset($sucesso))
                <div class="alert alert-success" role="alert">
                    <strong>Muito bem!</strong> {{ $sucesso }}
                </div>
                @endif --}}
<div class="jumbotron border rounded border-success">
        <center><div class="logoRegister mb-4">
                <a href="/add-empresa">
                    <img class="logoRegister mb-3" src="img/logologin.png" alt>
                </a>
            <div></center>
    <h1 class="text-center mb-2">Cadastro de Empresas</h1>
    <form action="{{ route('empresa.cadastrar') }}" method="post" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o nome">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" class="form-control" placeholder="Digite o endereço">
            </div>
            <div class="form-group">
                <label for="numero">Numero</label>
                <input type="text" name="numero" class="form-control" placeholder="Digite o numero">
                </div>
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" class="form-control" placeholder="Digite o complemento">
                    </div>
                    <div class="form-group">
                        <label for="cep">Cep</label>
                        <input type="text" name="cep" class="form-control" placeholder="Digite o cep">
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control" placeholder="Digite o bairro">
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" name="estado" class="form-control" placeholder="Digite o estado">
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" name="telefone" class="form-control" placeholder="Digite o telefone">
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" name="latitude" class="form-control" placeholder="Digite a latitude">
                                        </div>
                                        <div class="form-group">
                                            <label for="longitude">Longitude</label>
                                            <input type="text" name="longitude" class="form-control" placeholder="Digite a longitude">
                                            </div>
                                            <div class="form-group">

                                                <label for="cidade">Cidade</label>
                                                <select class="custom-select" id="cidade" name="cidade" aria-label="Example select with button addon" required>
                                                @foreach ($cidades as $cidade)

                                                    <option value="{{ $cidade->id }}">{{ $cidade->cidade }}</option>
                                                @endforeach
                                                </select>

                                            </div>
                                            {{-- <div class="form-group row">
                                                    <label class="col-sm-2">Cidades</label>
                                                    <div class="col-sm-10">
                                                        @foreach ($cidades as $cidade)
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="cidade" id="cidade" value="{{ $cidade->id }}">
                                                                {{ $cidade->cidade }}
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div> --}}
                                                <div class="form-group row">
                                                    <label class="col-sm-2">Materiais</label>
                                                    <div class="col-sm-10">
                                                        @foreach ($materiais as $material)
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="materiais[]" value="{{ $material->id }}"> {{ $material->tipoMaterial }}
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
        <button type="submit" class="btn btn-card btn-primary">CADASTRAR</button>
    </form>
</div>
</div>
</div>
</div>


@endsection

