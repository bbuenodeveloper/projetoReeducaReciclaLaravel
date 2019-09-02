@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Editar Produto";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="jumbotron border rounded border-success">
                <center>
                    <div class="logoRegister mb-4">
                        <a href="/add-cidade">
                            <img class="logoRegister mb-3" src="{{asset('img/logologin.png')}}" alt>
                        </a>
                        <div>
                </center>
                <h1 class="text-center mb-2">Editar Produto</h1>
                <form action="/editadoproduto/{{$produto->id}}" method="post" class="user-info-setting-form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control"
                            value="{{ $produto->nome }}">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-control"
                            value="{{ $produto->descricao }}">
                    </div>
                    <div class="form-group">
                        <label for="precoo">Preço</label>
                        <input type="text" name="preco" id="preco" class="form-control"
                            value="{{ $produto->preco }}">
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem</label>
                        <input type="file" name="imagem" id="imagem" class="form-control"
                            value="{{ $produto->imagem }}">
                    </div>
                    <div class="form-group">
                        <label for="quantidade_estoque">Quantidade em estoque</label>
                        <input type="text" name="quantidade_estoque" id="quantidade_estoque" class="form-control"
                            value="{{ $produto->quantidade_estoque }}">
                    </div>
                    <button type="submit" class="btn btn-success">CADASTRAR</button>
                </form>
            </div>
        </div>
    </div>
</div>






@endsection
