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
          <th>Email</th>
          <th>Editar</th>
          <th>Apagar</th>

        </tr>
      </thead>
      <tbody>

          @foreach ($newsletters as $newsletter)
            <tr>
            <td>{{$newsletter->id}}</td>
            <td>{{$newsletter->name}}</td>
            <td>{{$newsletter->email}}</td>
            <td><a href="/editar-news/{{$newsletter->id}}"><button class="btn btn-success" >Editar</button></td>
            <td><button class="btn btn-danger" id="deletaNews" onclick="deletaNews({{$newsletter->id}})">Apagar</button></td>

            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
    {{$newsletters->links()}}
  </div>


  @endsection
