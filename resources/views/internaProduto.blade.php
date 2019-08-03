@extends('layoutsloja.app')

@section('content')
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span> 
            <a href="/loja">Loja</a><span class="mx-2 mb-0">/</span>
            <strong class="text-black">Produto</strong></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-4 mt-5 mb-5">
            <img src="img/produtos_loja/Produto_1_interna.jpg" alt="">
        </div>
        <div class="col-4 mt-5 mb-5">
            <h2>Nome do Produto</h2>
            <p class="descInterna" >Categoria do produto</p>
            <h2 class="mt-4">Descrição do Produto</h2>
            <br><br><br><br><br><br><br>
            <h3 class="precoInterna">R$0,00</h3>
        </div>
    </div>
</div>

@endsection