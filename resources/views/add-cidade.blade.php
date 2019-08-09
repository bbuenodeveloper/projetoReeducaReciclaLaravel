@extends('layouts.appPainel')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
                @if (isset($sucesso))
                <div class="alert alert-success" role="alert">
                    <strong>Muito bem!</strong> {{ $sucesso }}
                </div>
                @endif
<div class="jumbotron border rounded border-success">
            <center><div class="logoRegister mb-4">
                <a href="index.html">
                    <img class="logoRegister mb-3" src="img/logologin.png" alt>
                </a>
            <div></center>
    <h1 class="text-center mb-2">Cadastro de Cidades</h1>
    <form action="{{ route('cidade.cadastrar') }}" method="post" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" class="form-control" placeholder="Digite a cidade">
        </div>
        <div class="form-group">
        <label for="imagem">Imagem</label>
        <input type="file" name="imagem" class=" form-control" >
        </div>
        <button type="submit" class="btn btn-card btn-primary" onclick="enviarForm(event)">CADASTRAR</button>
    </form>
</div>
</div>
</div>
</div>

<script>
    // function enviarForm(event) {
    //     event.preventDefault();
    //     // enviar form pro servidor
    //     let formData = $("form").serialize()
    //     $.post("{{ route('cidade.cadastrar') }}", formData, function (data){
    //         console.log(data);
    //     })
    //     // receber resposta e tratar


    // }
</script>

@endsection

