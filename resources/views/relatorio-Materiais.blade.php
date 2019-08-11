@extends('layouts.appPainel')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Materiais</th>
          <th>Editar</th>
          <th>Apagar</th>
        </tr>
      </thead>
      <tbody>

          @foreach ($materiais as $material)
            <tr>
            <td>{{$material->id}}</td>
            <td>{{$material->tipoMaterial}}</td>
            <td><button class="btn btn-success">Editar</button></td>
            <td><button class="btn btn-danger">Apagar</button></td>

            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
  </div>


  @endsection
