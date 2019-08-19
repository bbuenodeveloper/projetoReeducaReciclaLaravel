@extends('layouts.app')

@section('content')

<div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-6 mb-0"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span>
                    <a href="/loja">Loja</a><span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Produto</strong></div>
                    <div class="col-6 mb-0"><a href="/carrinho"><img src="{{asset ('img/produtos_loja/carrinho.png')}}"
                        class="sizeCarrinho pull-right" alt=""></a>
            </div>
            </div>
        </div>
    </div>

<div class="container">
    <div class="card mt-5 mb-5">
        <div class="row no-gutters">
            <aside class="col-sm-5 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div> <a href="images/items/1.jpg" data-fancybox=""><img
                                    src="/storage/produtos/{{$produto->imagem}}"></a></div>
                    </div> <!-- slider-product.// -->
                    <div class="img-small-wrap">
                        <div class="item-gallery"> <img src="/storage/produtos/{{$produto->imagem}}"></div>
                        <div class="item-gallery"> <img src="/storage/produtos/{{$produto->imagem}}"></div>
                        <div class="item-gallery"> <img src="/storage/produtos/{{$produto->imagem}}"></div>
                        <div class="item-gallery"> <img src="/storage/produtos/{{$produto->imagem}}"></div>
                    </div> <!-- slider-nav.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7">
                <article class="p-5">
                    <h3 class="title mb-3">{{$produto->nome}}</h3>

                    <div class="mb-3">
                        <var class="price h3 text-warning">
                            <span class="currency">R$</span><span class="num">{{$produto->preco}}</span>
                        </var>
                    </div> <!-- price-detail-wrap .// -->
                    <dl>
                        <dt>Descrição do produto</dt>
                        <dd>
                            <p>{{$produto->descricao}}</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt>Quantidade em estoque:</dt>
                        <dd>
                            <p>{{$produto->quantidade_estoque}}</p>
                        </dd>
                    </dl>


                    <hr>
                    <div class="row">
                        <div class="col-5">
                            <dl class="dlist-inline">
                                <dt>QUANTIDADE: </dt>
                                <dd>
                                    <select class="form-control form-control-sm" style="width:70px;">
                                        <option> 1 </option>
                                        <option> 2 </option>
                                        <option> 3 </option>
                                    </select>
                                </dd>
                            </dl> <!-- item-property .// -->
                        </div> <!-- col.// -->
                        <!-- col.// -->
                    </div> <!-- row.// -->
                    <hr>
                    <a href="/carrinho/{{$produto->id}}" class="btn  btn-primary">COMPRE AGORA</a>
                    <a href="#" class="btn  btn-outline-primary"> <i class="fas fa-shopping-cart"></i> ADICIONE AO CARRINHO</a>
                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->

</div>





@endsection
