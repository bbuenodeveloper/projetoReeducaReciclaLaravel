@extends('layouts.appPainel')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-striped table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>cidade</th>
                        <th>Imagem</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cidades as $cidade)
                    <tr>
                        <td>{{$cidade->id}}</td>
                        <td>{{$cidade->cidade}}</td>
                        <td>{{$cidade->imagem}}</td>
                        <td><a href="/editar-cidade/{{$cidade->id}}"><button class="btn btn-success">Editar</button></a>
                        </td>
                        <td><button class="btn btn-danger" id="deletaCidade"
                                onclick="deletaCidade({{$cidade->id}})">Apagar</button></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {{$cidades->links()}}
</div>


@endsection
