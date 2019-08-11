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
                <center>
                    <div class="logoRegister mb-4">
                        <a href="index.html">
                            <img class="logoRegister mb-3" src="img/logologin.png" alt>
                        </a>
                        <div>
                </center>
                <h1 class="text-center mb-2">
                    Cadastro de Newsletter</h1>
                <form action="{{ route('newsletter.cadastrar') }}" method="post" class="user-info-setting-form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Newsletter</label>
                        <input type="email" name="email" class="form-control" placeholder="email@email.com.br">
                    </div>
                    <button type="submit" class="btn btn-card btn-primary">CADASTRAR</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
