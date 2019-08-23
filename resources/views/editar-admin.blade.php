@extends('layouts.appPainel')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-6 mx-auto m-5">
<div class="jumbotron">
    <h1 class="text-center mb-3">Cadastro de Administrador</h1>
    <form action="/editar-admin/{{$editado->id}}" method="post" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" style="font-style: italic" value="{{$editado->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" style="font-style: italic" value="{{$editado->email}}">
        </div>
            <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control" style="font-style: italic">
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirmar Senha</label>
            <input type="password" name="password-confirm" class="form-control" style="font-style: italic">
        </div>
        <div class="form-group">
            <label for="avatar" >Insira sua foto</label>
            <div class="col-md-6 text-md-left p-0">
                <input type="file" name="avatar" id="avatar" accept="image/png,image/jpg">
            </div>
        </div>

        <button type="submit" class="btn btn-card btn-primary ml-0 mt-2">CADASTRAR</button>
    </form>
</div>
</div>
</div>
</div>


@endsection
