@extends('layouts.app')

@section('content')
<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Blog-Detalhes";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);
?>

<!-- Main Wrapper Start -->
<div class="main-wrapper">



    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="breadcrumb-title">Blog</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/home">Blog Detalhes</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div class="blog-details-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-2">
                    <!-- shop-sidebar-wrap start -->
                    <div class="blog-sidebar-wrap">

                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">Buscar</h4>
                            <div class="search-post">
                                <form  action="#" class="search-blog">
                                    <input type="text" placeholder="Digite aqui...">
                                    <button class=" btn-search" type="submit"><span class="fas fa-search"></span></button>
                                </form>
                            </div>
                        </div>
                        <!-- shop-sidebar end -->

                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">ULTIMAS POSTAGENS</h4>
                            
                        </div>
                        <!-- shop-sidebar end -->

                        <!-- shop-sidebar start -->
                        <div class="sidbar-blog mb--30">
                            <!-- sidbar-blog-inner start -->
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="product-details.html"><img src="img/blog-03.jpg" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="#">
                                        Gestora de recursos investe em inovação na área ambiental</a></h3>
                                </div>
                            </div>
                            <!-- sidbar-blog-inner end -->
                            <!-- sidbar-blog-inner start -->
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="blog-details.html"><img src="img/blog-02.jpg" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="#">
                                        O Benefício do Plástico Reciclado</a></h3>
                                </div>
                            </div>
                            <!-- sidbar-blog-inner end -->
                            <!-- sidbar-blog-inner start -->
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="#"><img src="img/blog-01.jpg" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="#">
                                        Cargil Instala linha de envase sustentável</a></h3>
                                </div>
                            </div>
                            <!-- sidbar-blog-inner end -->
                        </div>
                        <!-- shop-sidebar end -->



                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar">
                            <h4 class="title">Tags</h4>
                            <div class="sidebar-tag">
                                <a href="#">Vidro</a>
                                <a href="#">Papel</a>
                                <a href="#">plástico</a>

                            </div>
                        </div>
                        <!-- shop-sidebar end -->
                    </div>
                    <!-- shop-sidebar-wrap end -->
                </div>
                <div class="col-lg-8 order-1 order-lg-1">
                    <!-- blog-details-wrapper start -->
                    <div class="blog-details-wrapper">
                        <div class="blog-details-image">
                            <img src="img/blog-details.png" alt="">
                        </div>
                        <div class="blog-inner">
                            <ul class="meta">
                                <li>Por : <a href="#">admin</a></li>
                                <li>15 agosto 2019</li>
                                <li><a href="#">3 Comment</a></li>
                            </ul>
                        </div>
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">CARGILL INSTALA LINHA DE ENVASE MAIS EFICIENTE E SUSTENTÁVEL</h4>

                        </div>
                    
                        <div class="postinfo-wrapper">
                            <div class="post-info">
                                <p class="mb-2">A Cargill investiu mais de US$ 10 milhões para instalar uma linha de envase de óleo comestível de última geração em sua unidade de refinaria e processamento de grãos em Sidney, Ohio, nos Estados Unidos. A linha possui a tecnologia de envase mais eficiente de sua categoria, possibilitando um aumento anual de 75% da capacidade de produção em relação às versões anteriores. E mais: permite também que a Cargill e seus clientes cumpram seus compromissos de sustentabilidade, reduzindo o desperdício de material de embalagem e usando PET totalmente reciclável.</p>

                                <p class="mb-2">“Este investimento nos possibilita elevar ainda mais nossos padrões e fazer o que é certo para nossos clientes”, disse Ethan Theis, líder comercial norte-americano do negócio global de óleos comestíveis da Cargill. “Ao utilizar essa tecnologia inédita, estamos adotando medidas concretas para operar de maneira mais eficiente e sustentável.”</p>

                                <p class="mb-2">A nova linha possui tecnologia inteligente para avaliar os elementos de embalagem e preencher as alturas no envase, reduzindo a perda de material e assegurando o aumento da eficiência. Combinados, os benefícios da nova solução estabelecem um padrão inédito em envase e sustentabilidade para os óleos comestíveis.</p>

                                <p class="mb-2">A unidade de Sidney é a maior em volume de produção de seu segmento da Cargill mundialmente. No total, a companhia possui operações em 70 países e vende seus produtos em mais de 125 nações, conectando agricultores, fabricantes e consumidores. O negócio global de óleos comestíveis da empresa planeja ampliar o uso da nova tecnologia com a instalação de mais duas linhas ainda neste ano.</p>

                                <p>Para saber mais: <a href="https://www.cargill.com">https://www.cargill.com</a></p>
                                <div class="post-commet">
                                    <a class="blog-comment" href="#">0 COMMENTÁRIOS</a>
                                </div>
                            </div>
                            <div class="review_address_inner">
                                    <!-- Start Single Review -->
                                    <div class="pro_review">
                                        <div class="review_thumb">
                                            <img alt="review images" src="img/comment-1.jpg">
                                        </div>
                                        <div class="review_details">
                                            <div class="review_info">
                                                <h4><a href="#">Ana Baccarin</a></h4>
                                                <div class="rating_send">
                                                    <a href="#"><span class="fas fa-reply"></span></a>
                                                </div>
                                            </div>
                                            <div class="review_date">
                                                <span>15 Agosto, 2019 ás 15:30</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                    <!-- Start Single Review -->
                                    <div class="pro_review ans">
                                        <div class="review_thumb">
                                            <img alt="review images" src="img/comment-2.jpg">
                                        </div>
                                        <div class="review_details">
                                            <div class="review_info">
                                                <h4><a href="#">Bruno Bueno</a></h4>
                                                <div class="rating_send">
                                                    <a href="#"><span class="fas fa-reply"></span></a>
                                                </div>
                                            </div>
                                            <div class="review_date">
                                                <span>15 Agosto, 2019 ás 15:30</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                </div>
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="comment-reply-title">Deixe sua resposta</h3>
                                        <form action="#" class="comment-form-area">
                                            <p class="comment-notes"><span id="email-notes">Seu endereço de email não será publicado.</span> Campos obrigatórios <span class="required">*</span></p>
                                            <p class="comment-form-comment">
                                                <label>Comentário</label>
                                                <textarea class="comment-notes" required="required"></textarea>
                                            </p>
                                            <div class="comment-input">
                                                <p class="comment-form-author">
                                                    <label>Nome <span class="required">*</span></label>
                                                    <input type="text" required="required" name="Name">
                                                </p>
                                                <p class="comment-form-email">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" required="required" name="email">
                                                </p>
                                                <p class="comment-form-url">
                                                    <label>Website</label>
                                                    <input type="text" name="url">
                                                </p>
                                            </div>
                                            <div class="comment-form-submit">
                                                <input type="submit" value="Comentar" class="comment-submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog-details-wrapper end -->
                </div>
            </div>
        </div>
    </div>


    @endsection
