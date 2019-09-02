@extends('layouts.app')

@section('content')

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-6"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Loja</strong></div>
            <div class="col-6"><a href="/carrinho"><img src="img/produtos_loja/carrinho.png"
                        class="sizeCarrinho pull-right" alt=""></a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-3">
            <nav class="nav ">
                @foreach($categorias as $categoria)
                <a class="nav-link fonteCateg" href="#">{{$categoria->nome_categoria}}</a>
                @endforeach
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($produtos as $produto)
        <div class="col-4 mb-5">
            <figure class="card card-product">
                <div class="img-wrap"><a href="/internaProduto/{{$produto->id}}"><img src="/storage/produtos/{{$produto->imagem}}"></a></div>
                <figcaption class="info-wrap justify-content-center">
                    <h4 class="title">{{$produto->nome}}</h4>
                </figcaption>
                <div class="bottom-wrap">
                <a href="/internaProduto/{{$produto->id}}" class="btn btn-sm btn-primary float-right">COMPRAR</a>
                    <div class="price-wrap h5">
                        <span class="price-new">R${{$produto->preco}}</span>
                    </div> <!-- price-wrap.// -->
                </div> <!-- bottom-wrap.// -->
            </figure>
        </div>
        @endforeach
        <!-- col // -->
    </div>
    <!-- row.// -->
</div>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <center>
                {{$produtos->links()}}
            </center>
        </div>
    </div>
</div>





@endsection
