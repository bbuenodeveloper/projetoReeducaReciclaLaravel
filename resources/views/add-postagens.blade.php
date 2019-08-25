@extends('layouts.appPainel')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
<div class="jumbotron border rounded border-success">
            <center><div class="logoRegister mb-4">
                <a href="/add-postagens">
                    <img class="logoRegister mb-3" src="img/logologin.png" alt>
                </a>
            <div></center>
    <h1 class="text-center mb-2">Cadastro de Postagens</h1>
    <form dataroute="{{ route('postagem.cadastrar') }}" method="post" id="formPostagem" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="data">Data</label>
        <input type="date" name="data" id="data" class="form-control" placeholder="Data">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Digite o titulo">
        </div>
        <div class="form-group">
            <textarea name="texto" id="ck_editor" rows="10" cols="80"></textarea>
            <script>
                CKEDITOR.replace( 'ck_editor' );
            </script>
        </div>
        <div class="form-group">
        <label for="imagem">Imagem</label>
        <input type="file" name="imagem" id="imagem" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success" >CADASTRAR</button>
    </form>
</div>
</div>
</div>
</div>





@endsection

