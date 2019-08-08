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
          <th>Sobrenome</th>
          <th>email</th>
          <th>Cep</th>
          <th>Endereço</th>
          <th>Numero</th>
          <th>Complemento</th>
          <th>Bairro</th>
          <th>Data Nascimento</th>
          <th>Estado</th>
          <th>Cidade</th>
          <th>Nível Usuário</th>
          <th>Telefone</th>

        </tr>
      </thead>
      <tbody>

          @foreach ($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->sobrenome}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->cep}}</td>
            <td>{{$user->endereco}}</td>
            <td>{{$user->numero}}</td>
            <td>{{$user->complemento}}</td>
            <td>{{$user->bairro}}</td>
            <td>{{$user->data_nascimento}}</td>
            <td>{{$user->estado}}</td>
            <td>{{$user->cidade}}</td>
            <td>{{$user->nivel_user}}</td>
            <td>{{$user->telefone}}</td>
            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
  </div>


  @endsection