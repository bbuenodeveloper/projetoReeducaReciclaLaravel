@extends('layouts.appPainel')

@section('content')

<div class="container-fluid dataTables_wrapper dt-bootstrap4" id="dtBasicExample_wrapper">
    <div class="row">
        <div class="col-12">
            <table id="align-table" class="table table-hover table-sm table-striped table-bordered table-sm ">
                <thead class="thead-light">
                    <tr>
                        <th class="th-sm">Id</th>
                        <th class="th-sm">Nome</th>
                        <th>Endereço</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Cep</th>
                        <th>Bairro</th>
                        <th>Estado</th>
                        <th>Telefone</th>
                        <th>Site</th>
                        <th>Latitude</th>
                        <th>longitude</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{$empresa->id}}</td>
                        <td>{{$empresa->nome}}</td>
                        <td>{{$empresa->endereco}}</td>
                        <td>{{$empresa->numero}}</td>
                        <td>{{$empresa->complemento}}</td>
                        <td>{{$empresa->cep}}</td>
                        <td>{{$empresa->bairro}}</td>
                        <td>{{$empresa->estado}}</td>
                        <td>{{$empresa->telefone}}</td>
                        <td>{{$empresa->site}}</td>
                        <td>{{$empresa->latitude}}</td>
                        <td>{{$empresa->longitude}}</td>
                        <td><a href="/editar-empresa/{{$empresa->id}}"><button
                                    class="btn btn-success">Editar</button></a></td>
                        <td><button class="btn btn-danger" id="deletaEmpresa"
                                onclick="deletaEmpresa({{$empresa->id}})">Apagar</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$empresas->links()}}
</div>




@endsection
