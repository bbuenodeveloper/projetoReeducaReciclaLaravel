@extends('layouts.appPainel')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Endereço</th>
          <th>Numero</th>
          <th>Complemento</th>
          <th>Cep</th>
          <th>Bairro</th>
          <th>Estado</th>
          <th>Telefone</th>
          <th>Latitude</th>
          <th>longitude</th>


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
            <td>{{$empresa->latitude}}</td>
            <td>{{$empresa->longitude}}</td>

            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
  </div>


  @endsection
