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

        </tr>
      </thead>
      <tbody>

          @foreach ($materiais as $material)
            <tr>
            <td>{{$material->id}}</td>
            <td>{{$material->tipoMaterial}}</td>


            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
  </div>


  @endsection
