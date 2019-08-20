@extends('layouts.appPainel')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
<div class="card">
    <div class="card-body">


                <center>
                    <div class="form-header mb-4 mt-4">
                            <h3 class="text-center mb-2" style="color:black">Cadastro de Newsletter</h3>

                    </div>
                </center>

                <form action="/editar-news/{{$newsletter->id}}" method="post"  class="user-info-setting-form"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="md-form mt-5">
                            <i class="fa fa-recycle prefix grey-text"></i>
                            <input type="email" name="editaEmail" id="editarEmail" value="{{ $newsletter->email }}"class="form-control">
                            <label for="editarEmail" class="font-weight-light">Digite o Cadastro</label>
                          </div>

                    <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">EDITAR</button>
                </form>
            </div>

            {{-- </div> --}}
        </div>
        </div>
    </div>
</div>



@endsection
