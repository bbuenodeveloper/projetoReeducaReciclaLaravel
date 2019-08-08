@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
<div class="jumbotron">
    <h1 class="text-center mb-2">
        Cadastro de Newsletter</h1>
    <form action="/home" method="post" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="email">Newsletter</label>
        <input type="email" name="email" class="form-control" placeholder="email@email.com.br">
        </div>
        <button type="submit" class="btn btn-card btn-primary">Assine Agora</button>
    </form>
</div>
</div>
</div>
</div>


@endsection
