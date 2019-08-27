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
                <a href="/add-cidade">
                    <img class="logoRegister mb-3" src="{{asset('img/logologin.png')}}" alt>
                </a>
            <div></center>
    <h1 class="text-center mb-2">Editar Categoria</h1>
    <form action="/editadocidade/{{$cidade->id}}" method="post"  class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $categoria->nome }}">
        </div>
        <div class="form-group">
        <label for="imagem">Imagem</label>
        <input type="file" name="imagem" id="imagem" class="form-control" value="{{ $categoria->imagem }}" >
        </div>
        <button type="submit" class="btn btn-success" >CADASTRAR</button>
    </form>
</div>
</div>
</div>
</div>






@endsection

