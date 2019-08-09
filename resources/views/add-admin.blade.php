@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-6 mx-auto m-5">
<div class="jumbotron">
    <h1 class="text-center mb-2">Cadastro de Administrador</h1>
    <form action="/add-admin" method="post" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome do admin">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email do admin">
        </div>
            <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control" placeholder="Senha">
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirmar Senha</label>
            <input type="password" name="password-confirm" class="form-control" placeholder="Confirmar Senha">
        </div>

        <button type="submit" class="btn btn-card btn-primary">CADASTRAR</button>
    </form>
</div>
</div>
</div>
</div>


@endsection
