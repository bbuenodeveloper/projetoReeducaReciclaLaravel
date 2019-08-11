@extends('layouts.appPainel')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-5">

                {{-- @if (isset($sucesso))
                <div class="alert alert-success" role="alert">
                    <strong>Muito bem!</strong> {{ $sucesso }}
                </div>
                @endif --}}
            <div class="jumbotron border rounded border-success">
                    <center><div class="logoRegister mb-4">
                            <a href="/add-cidade">
                                <img class="logoRegister mb-3" src="img/logologin.png" alt>
                            </a>
                        <div></center>

                <form action="{{ route('categoria.cadastrar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <h1 class="mb-4">Cadastro de Categorias</h1>
                    <div class="form-group">
                        <label for="nomeCategoria">Nome da Categoria</label>
                        <input type="text" class="form-control" id="nomeCategoria" name="nome_categoria"
                            placeholder="Nome da categoria" required>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right widthHeightBtn">CADASTRAR CATEGORIA</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
