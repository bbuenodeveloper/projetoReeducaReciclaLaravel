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
          <th>Imagem</th>
          <th>Preço</th>
          <th>Descrição</th>
          <th>Estoque</th>
          <th>Editar</th>
          <th>Apagar</th>


        </tr>
      </thead>
      <tbody>

          @foreach ($produtos as $produto)
            <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->imagem}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->quantidade_estoque}}</td>
            <td><a href="/editar-produto/{{$produto->id}}"><button class="btn btn-success" >Editar</button></a></td>
            <td><button class="btn btn-danger" id="deletaProduto" onclick="deletaEmpresa({{$produto->id}})">Apagar</button></td>
            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
    {{$produtos->links()}}
  </div>




  @endsection

