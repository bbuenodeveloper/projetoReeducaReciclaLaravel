@extends('layouts.appPainel')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-striped table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Imagem</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->titulo}}</td>
                        <td>{{$post->imagem}}</td>
                        <td><a href="/editar-post/{{$post->id}}"><button class="btn btn-success">Editar</button></a>
                        </td>
                        <td><button class="btn btn-danger" id="deletaPostagem"
                                onclick="deletaPostagem({{$post->id}})">Apagar</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$posts->links()}}
</div>


@endsection
