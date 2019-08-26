
@extends('layouts.app')

@section('content')
<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Blog";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);
?>

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
                            <h4 class="title">ULTIMAS POSTAGENS</h4>

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
                        <!-- shop-sidebar end -->



                        <!-- shop-sidebar start -->

                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-1">
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-latest-blog mb--30">
                                <div class="latest-blog-image">
                                    <a href="/post/{{ $post->id }}"><img src="/storage/img/{{ $post->imagem }}" alt=""></a>
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
                    </div><!--// paginatoin-area End -->
                </div>
            </div>
        </div>
    </div>


    @endsection
