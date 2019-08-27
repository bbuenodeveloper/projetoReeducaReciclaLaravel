@extends('layouts.app')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Blog";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<!-- Main Wrapper Start -->
<div class="main-wrapper">

    <div class="blog-details-area bg-grey section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1">
                    <!-- shop-sidebar-wrap start -->
                    <div class="blog-sidebar-wrap">
                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">ÚLTIMAS POSTAGENS</h4>
                        </div>
                        <!-- shop-sidebar end -->
                        <!-- shop-sidebar start -->
                        <div class="sidbar-blog mb--30">
                            <!-- sidbar-blog-inner start -->
                            @foreach ($ultimos as $p)
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="/post/{{ $p->id }}"><img src="/storage/img/{{ $p->imagem }}" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="/post/{{ $p->id }}">{{ $p->titulo }}</a></h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-1">
                    <div class="row">
                        @foreach ($ultimos as $post)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-latest-blog mb--30">
                                <div class="latest-blog-image">
                                    <a href="/post/{{ $post->id }}"><img src="/storage/img/{{ $post->imagem }}"
                                            alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="/post/{{ $post->id }}">{{ $post->titulo }}</a></h3>
                                    <p>{{ substr(strip_tags($post->texto), 0, 140) }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="paginatoin-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination-box">
                                    <li><a class="Previous" href="#">Anterior</a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a class="Next" href="#">Próximo </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--// paginatoin-area End -->
                </div>
            </div>
        </div>
    </div>


    @endsection
