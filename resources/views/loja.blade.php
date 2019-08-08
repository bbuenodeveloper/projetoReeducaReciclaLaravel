@extends('layoutsloja.app')

@section('content')

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-6 mb-0"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Loja</strong></div>
            <div class="col-6 mb-0"><a href="/carrinho"><img src="img/produtos_loja/carrinho.png"
                        class="sizeCarrinho pull-right" alt=""></a>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-9 order-2">


                <div class="row mb-5">
                    <div class="col-sm-6 col-lg-4 mb-4 mt-5" data-aos="fade-up">
                        @foreach($produtos as $produto)
                            <div class="card text-center border">
                                <figure class="block-4-image">
                                    <a href="shop-single.html"><img src="img/produtos_loja/Produto_1.jpg"
                                            alt="Image placeholder" class="img-fluid"></a>
                                </figure>
                                <div class=" p-4">
                                    <h3><a href="shop-single.html" class="lojaProdutos">{{$produto->nome}}</a></h3>
                                    <p class="precoLoja font-weight-bold">R${{$produto->preco}}</p>
                                    <a class="btn btn-success" href="/internaProduto">VER PRODUTO</a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    

                </div>

            </div>

            <div class="col-md-3 order-1 mb-5 mb-md-0">
                <div class="border p-4 rounded mb-4 mt-5">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">CATEGORIAS</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><a href="#" class="d-flex"><span>Categoria 1</span> <span
                                    class="text-black ml-auto">(5)</span></a></li>
                        <li class="mb-1"><a href="#" class="d-flex"><span>Categoria 2</span> <span
                                    class="text-black ml-auto">(5)</span></a></li>
                        <li class="mb-1"><a href="#" class="d-flex"><span>Categoria 3</span> <span
                                    class="text-black ml-auto">(5)</span></a></li>
                    </ul>
                </div>





            </div>
        </div>
    </div>



</div>
</div>


@endsection
