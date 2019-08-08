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
        </tr>
      </thead>
      <tbody>

          @foreach ($cidades as $cidade)
            <tr>
            <td>{{$cidade->id}}</td>
            <td>{{$cidade->cidade}}</td>
            <td>{{$cidade->imagem}}</td>

            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
  </div>


  @endsection
