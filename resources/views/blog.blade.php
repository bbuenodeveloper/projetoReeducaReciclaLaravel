
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


    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="breadcrumb-title">Blog</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div class="blog-details-area bg-grey section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1">
                    <!-- shop-sidebar-wrap start -->
                    <div class="blog-sidebar-wrap">

                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">Buscar</h4>
                            <div class="search-post">
                                <form  action="#" class="search-blog">
                                    <input type="text" placeholder="Digite Aqui...">
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
                                    <a href="#"><img src="img/blog-03.jpg" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="#">Gestora de recursos investe em inovação na área ambiental</a></h3>
                                </div>
                            </div>
                            <!-- sidbar-blog-inner end -->
                            <!-- sidbar-blog-inner start -->
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="#"><img src="img/blog-02.jpg" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="#"> O Benefício do Plástico Reciclado</a></h3>
                                </div>
                            </div>
                            <!-- sidbar-blog-inner end -->
                            <!-- sidbar-blog-inner start -->
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="/blog-details"><img src="img/blog-01.jpg" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="#">Cargil Instala linha de envase sustentável</a></h3>
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
                                <a href="#">Plastico</a>

                            </div>
                        </div>
                        <!-- shop-sidebar end -->
                    </div>
                    <!-- shop-sidebar-wrap end -->
                </div>
                <div class="col-lg-8 order-1 order-lg-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <!-- single-latest-blog Start -->
                            <div class="single-latest-blog mb--30">
                                <div class="latest-blog-image">
                                    <a href="/blog-details"><img src="img/blog-01.jpg" alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="/blog-details">CARGILL INSTALA LINHA DE ENVASE MAIS EFICIENTE E SUSTENTÁVEL

                                    </a></h3>
                                    <p>A Cargill investiu mais de US$ 10 milhões para instalar uma linha de envase de óleo comestível de última geração</p>
                                </div>
                            </div><!--// single-latest-blog End -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- single-latest-blog Start -->
                            <div class="single-latest-blog mb--30">
                                <div class="latest-blog-image">
                                    <a href="#"><img src="img/blog-04.jpg" alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="#">PEPSICO UNE RECICLAGEM E FUTEBOL EM AÇÃO QUE ENGAJA A SOCIEDADE</a></h3>
                                    <p>Termina no sábado, dia 8 de novembro, a ação “Craques da Reciclagem”, promovida pela PepsiCo...</p>
                                </div>
                            </div><!--// single-latest-blog End -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- single-latest-blog Start -->
                            <div class="single-latest-blog mb--30">
                                <div class="latest-blog-image">
                                    <a href="#"><img src="img/blog-06.jpg" alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="#">A GESTÃO DE RESÍDUOS SÓLIDOS NAS PLATAFORMAS MARÍTIMAS</a></h3>
                                    <p>Eduardo da Silva Videla era ainda um jovem mergulhador profissional quando teve sua atenção ...</p>
                                </div>
                            </div><!--// single-latest-blog End -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- single-latest-blog Start -->
                            <div class="single-latest-blog mb--30 ">
                                <div class="latest-blog-image">
                                    <a href="#"><img src="img/blog-02.jpg" alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="#">O BENEFÍCIO DO PLÁSTICO RECICLADO</a></h3>
                                    <p>Já estão em fase de conclusão os cálculos feitos pelos pesquisadores da Franklin Associates sobre ...</p>
                                </div>
                            </div><!--// single-latest-blog End -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- single-latest-blog Start -->
                            <div class="single-latest-blog mb--30">
                                <div class="latest-blog-image">
                                    <a href="#"><img src="img/blog-03.jpg" alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="#">GESTORA DE RECURSOS INVESTE EM INOVAÇÃO NA ÁREA AMBIENTAL </a></h3>
                                    <p>A Inseed Investimentos, gestora de recursos focada em empresas inovadoras com elevado potencial de crescimento...</p>
                                </div>
                            </div><!--// single-latest-blog End -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- single-latest-blog Start -->
                            <div class="single-latest-blog mb--30 ">
                                <div class="latest-blog-image">
                                    <a href="#"><img src="img/blog-05.jpg" alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="#">PELOTAS PRIORIZA AÇÕES EM ESCOLAS PARA DISSEMINAR A COLETA SELETIVA</a></h3>
                                    <p>A primeira iniciativa do município de Pelotas, no Rio Grande do Sul, visando à segregação dos resíduos recicláveis ocorreu nos anos 90...</p>
                                </div>
                            </div><!--// single-latest-blog End -->
                        </div>
                    </div>
                    <!-- paginatoin-area Start -->
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
