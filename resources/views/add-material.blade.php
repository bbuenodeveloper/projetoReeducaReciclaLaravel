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
                            <h3 class="text-center mb-2" style="color:black">Cadastro de Material</h3>
                        {{-- <a href="index.html">
                            <img class="logoRegister mb-3" src="img/logologin.png" alt>
                        </a> --}}
                    </div>
                </center>

                <form action="{{ route('material.cadastrar') }}" method="post" class="user-info-setting-form"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="md-form mt-5">
                            <i class="fa fa-recycle prefix grey-text"></i>
                            <input type="text" name="tipoMaterial" id="materialFormCardNameEx" class="form-control">
                            <label for="tipoMaterial" class="font-weight-light">Digite o material</label>
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
