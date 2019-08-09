@extends('layouts.appPainel')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
<div class="jumbotron border rounded border-success">
        <center><div class="logoRegister mb-4">
                <a href="index.html">
                    <img class="logoRegister mb-3" src="img/logologin.png" alt>
                </a>
            <div></center>
    <h1 class="text-center mb-2">Cadastro de Material</h1>
    <form action="{{ route('material.cadastrar') }}" method="post" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="tipoMaterial">Material</label>
        <input type="text" name="tipoMaterial" class="form-control" placeholder="Digite o material">
        </div>

        <button type="submit" class="btn btn-card btn-primary">CADASTRAR</button>
    </form>
</div>
</div>
</div>
</div>



@endsection

