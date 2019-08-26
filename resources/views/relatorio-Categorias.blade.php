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
          <th>Editar</th>
          <th>Apagar</th>


        </tr>
      </thead>
      <tbody>

          @foreach ($categorias as $categoria)
            <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nome}}</td>
            <td><a href="/editar-categoria/{{$categoria->id}}"><button class="btn btn-success" >Editar</button></a></td>
            <td><button class="btn btn-danger" id="deletaCategoria" onclick="deletaEmpresa({{$categoria->id}})">Apagar</button></td>
            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
  </div>




  @endsection

