@extends('layouts.appPainel')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-5">
            <div class="jumbotron border rounded border-success">
                <center>
                    <div class="logoRegister mb-4">
                        <a href="/add-cidade">
                            <img class="logoRegister mb-3" src="{{asset('img/logologin.png')}}" alt>
                        </a>
                        <div>
                </center>
                <form action="{{ route('tagBlog.cadastrar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="mb-4">Cadastro de Tag Blog</h1>
                    <div class="form-group">
                        <label for="tagBlog">TAG</label>
                        <input type="text" class="form-control" id="tagBlog" name="tagBlog" placeholder="Nome da Tag"
                            required>
                    </div>
                    <button type="submit" class="btn btn-success ">CADASTRAR</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
