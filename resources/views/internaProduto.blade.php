@extends('layoutsloja.app')

@section('content')
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-6 mb-0"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span>
            <a href="/loja">Loja</a><span class="mx-2 mb-0">/</span>
            <strong class="text-black">Produto</strong></div>
            <div class="col-6 mb-0"><a href="/carrinho"><img src="{{ asset ('img/produtos_loja/carrinho.png') }}"
                        class="sizeCarrinho pull-right" alt=""></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
        <div class="shop_wrapper col-md-12 mt-5">
            <form action="" method="post" id="product_addtocart_form" class="cart">
                <input name="form_key" type="hidden" value="mf810E7lRHb0jHHz" />

                <!-- inicio imagens -->
                <div class="row">
                    <div class="shop-left shop_item col-md-6 ">

                            <div id="carouselExampleControls " class="carousel slide border-carousel" data-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="/storage/produtos/{{$produto->imagem}}" alt="First slide">
                                      </div>

                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>


                    </div>

                    <!-- fim imagens -->

                    <div class="shop-right col-lg-6">
                        <div class="title">
                        <h1 class="shorter product-name">{{$produto->nome}}</h1>

                        <p class="availability in-stock">Disponibilidade:<span> {{$produto->quantidade_estoque}}  unidades em estoque</span></p>
                            <div class="price-box">
                                <span class="regular-price" id="product-price-1509">
                                <span class="price">R$ {{$produto->preco}}</span> </span>

                            </div>

                        </div>

                        <!-- Adicionar quantidade -->

                        <div class="add-to-box">
                            <div class="shop_meta">
                                <div class="pull-left">
                                    <div class="btn-shop">
                                        <div class="form-inline">
                                            <div class="form-group has-success has-feedback">
                                                <span><i class="fa fa-minus"></i></span>
                                                <input type="text" class="form-control" title="Qty" value="1" name="qty"
                                                    id="qty" />
                                                <span><i class="fa fa-plus"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- fim add quantidade -->

                            <!-- botão comprar -->

                            <div class="pull-right btn-comprar">
                                <div class="btn-shop">
                                    <a class="btn woo_btn btn-success" href="/carrinho/{{$produto->id}}">Comprar</a>

                                </div>
                            </div>
                            <!-- fim botao comprar  -->
                            <div class="addto">
                            </div>
                        </div>
                    </div>
                    <div class="clearer"></div>
                </div>
            </form>
            <!-- inicio descrição do propduto -->
            <div class="clearfix"></div>
            <div id="shop_features" class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active titulo-prod">
                        <span>
                            Descrição <span>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="box-description">
                        <div class="std">
                        <p>{{$produto->descricao}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
