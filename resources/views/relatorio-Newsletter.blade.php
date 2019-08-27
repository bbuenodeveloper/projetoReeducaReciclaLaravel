@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Relatório Materiais";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-striped table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsletters as $newsletter)
                    <tr>
                        <td>{{$newsletter->id}}</td>
                        <td>{{$newsletter->name}}</td>
                        <td>{{$newsletter->email}}</td>
                        <td><a href="/editar-news/{{$newsletter->id}}"><button class="btn btn-success">Editar</button>
                        </td>
                        <td><button class="btn btn-danger" id="deletaNews"
                                onclick="deletaNews({{$newsletter->id}})">Apagar</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$newsletters->links()}}
</div>


@endsection
