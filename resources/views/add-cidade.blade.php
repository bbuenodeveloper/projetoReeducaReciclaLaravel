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
                    <img class="logoRegister mb-3" src="img/logologin.png" alt>
                </a>
            <div></center>
    <h1 class="text-center mb-2">Cadastro de Cidades</h1>
    <form dataroute="{{ route('cidade.cadastrar') }}" method="post" id="myform" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Digite a cidade">
        </div>
        <div class="form-group">
        <label for="imagem">Imagem</label>
        <input type="file" name="imagem" id="imagem" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-card btn-primary" >CADASTRAR</button>
    </form>
</div>
</div>
</div>
</div>



    {{-- <script>
        $(document).ready(function() {
            $("myform").ajaxForm({
                success: function(executeSweet){

                }
            });
        });
    </script> --}}
{{-- <script>
    $("#myform").submit(function(e) {
    var url = "{{ route('cidade.cadastrar') }}";
    $.ajax({
           type: "POST",
           url: url,
           data: $("#myform").serialize(),
           success: function()
           {
            Swal.fire({
        type: 'success',
        text: 'Cadastro realizado com sucesso!',

        })
           }
         });

    e.preventDefault();// esse comando serve para previnir que o form realmente realize o submit e atualize a tela.
});

</script> --}}



@endsection

