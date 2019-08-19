@extends('layouts.app')

@section('content')

<div class="container">
    <div class="mb-5 mt-5">
        <div class="card">
            <table class="table table-hover shopping-cart-wrap">
                <thead class="text-muted">
                    <tr>
                        <th scope="col">Produto</th>
                        <th scope="col" width="120">Quantidade</th>
                        <th scope="col" width="120">Preço</th>
                        <th scope="col" width="200" class="text-right">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <figure class="media">
                                <div class="img-wrap"><img src="/storage/produtos/{{$produto->imagem}}"
                                        class="img-thumbnail img-sm"></div>

                                <h3 class="title text-truncate">{{$produto->nome}}</h6>

                            </figure>
                        </td>
                        <td>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </td>
                        <td>
                            <div class="price-wrap">
                                <var class="price">R$ {{$produto->preco}}</var>
                            </div> <!-- price-wrap .// -->
                        </td>
                        <td class="text-right">
                            <a href="" class="btn btn-outline-danger"> × Remover</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div> <!-- card.// -->
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 mb-5">
            <a href="#" class="btn  btn-outline-primary"> <i class="fas fa-shopping-cart"></i> CONTINUAR COMPRANDO</a>
            <a href="/dadoscompra/{{$produto->id}}" class="btn  btn-primary">FINALIZAR COMPRA</a>
        </div>
    </div>
</div>






@endsection
