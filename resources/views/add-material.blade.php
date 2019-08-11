@extends('layouts.appPainel')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
<div class="card">
    <div class="card-body">

            {{-- @if (isset($sucesso))
            <div class="alert alert-success" role="alert">
                <strong>Muito bem!</strong> {{ $sucesso }}
            </div>
            @endif --}}
            {{-- <div class="jumbotron border rounded border-success"> --}}
                <center>
                    <div class="form-header mb-4 mt-4">
                            <h3 class="text-center mb-2">Cadastro de Material</h3>
                        {{-- <a href="index.html">
                            <img class="logoRegister mb-3" src="img/logologin.png" alt>
                        </a> --}}
                    </div>
                </center>

                <form action="{{ route('material.cadastrar') }}" method="post" class="user-info-setting-form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="md-form mt-5">
                        <label for="tipoMaterial">Material</label>
                        <input type="text" name="tipoMaterial" class="form-control" placeholder="Digite o material">
                    </div>

                    <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">CADASTRAR</button>
                </form>
            </div>

            {{-- </div> --}}
        </div>
        </div>
    </div>
</div>



@endsection
