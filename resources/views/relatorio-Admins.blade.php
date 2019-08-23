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
          <th>email</th>
          <th>Nível Usuário</th>
          <th>Senha</th>
          <th>Imagem</th>
          <th>Editar</th>
          <th>Apagar</th>
        </tr>
      </thead>
      <tbody>

          @foreach ($admin as $admins)
            <tr>
            <td>{{$admins->id}}</td>
            <td>{{$admins->name}}</td>            
            <td>{{$admins->email}}</td>
            <td>{{$admins->nivel_user}}</td>
            <td>{{$admins->password}}</td>
            <td>{{$admins->imagem}}</td>
            <td><a href="/editar-admin/{{$admins->id}}"><button class="btn btn-success" style="padding:15px;">Editar</button></a></td>
            <td><a href="/apagarAdmin/{{$admins->id}}"><button class="btn btn-danger" id="deletarAdmin" onclick="deletarAdmin({{$admins->id}})"style="padding:15px;">Deletar</button></td>
            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
  </div>


  @endsection
