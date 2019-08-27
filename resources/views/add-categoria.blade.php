@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Incluir Categoria";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-5">
            <div class="jumbotron border rounded border-success">
                <center>
                    <div class="logoRegister mb-4">
                        <a href="/add-cidade">
                            <img class="logoRegister mb-3" src="{{asset('img/logologin.png')}}" alt>
                        </a>
                        <div>
                </center>

                <form action="{{ route('categoria.cadastrar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="mb-4">Cadastro de Categorias</h1>
                    <div class="form-group">
                        <label for="nome_categoria">Nome da Categoria</label>
                        <input type="text" class="form-control" id="nome_categoria" name="nome_categoria"
                            placeholder="Nome da categoria" required>
                    </div>
                    <button type="submit" class="btn btn-success pull-right widthHeightBtn">CADASTRAR CATEGORIA</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
