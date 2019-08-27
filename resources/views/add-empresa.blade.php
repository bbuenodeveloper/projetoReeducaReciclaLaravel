@extends('layouts.appPainel')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">


<div class="jumbotron border rounded border-success">
        <center><div class="logoRegister mb-4">
                <a href="/add-empresa">
                    <img class="logoRegister mb-3" src="{{asset('img/logologin.png')}} alt>
                </a>
            <div></center>
    <h1 class="text-center mb-2">Cadastro de Empresas</h1>
    <form dataroute="{{ route('empresa.cadastrar') }}" method="post" id="formEmpresa" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Digite o endereço">
            </div>
            <div class="form-group">
                <label for="numero">Numero</label>
                <input type="text" name="numero" id="numero" class="form-control" placeholder="Digite o numero">
                </div>
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento" class="form-control" placeholder="Digite o complemento">
                    </div>
                    <div class="form-group">
                        <label for="cep">Cep</label>
                        <input type="text" name="cep" id="cep" class="form-control" placeholder="Digite o cep">
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Digite o bairro">
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" name="estado" id="estado" class="form-control" placeholder="Digite o estado">
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Digite o telefone">
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Digite a latitude">
                                        </div>
                                        <div class="form-group">
                                            <label for="longitude">Longitude</label>
                                            <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Digite a longitude">
                                            </div>
                                            <div class="form-group">

                                                <label for="cidade">Cidade</label>
                                                <select class="custom-select" id="cidade" name="cidade" aria-label="Example select with button addon" required>
                                                @foreach ($cidades as $cidade)

                                                    <option value="{{ $cidade->id }}">{{ $cidade->cidade }}</option>
                                                @endforeach
                                                </select>

                                            </div>

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
        <button type="submit" class="btn btn-success">CADASTRAR</button>
    </form>
</div>
</div>
</div>
</div>


@endsection

