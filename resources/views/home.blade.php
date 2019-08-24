@extends('layouts.app')

@section('content')

<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'mapahome.png';

$title = $facebook_title = "Home";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Recicla, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<section class="container-fluid">



	<div class="clearfix"></div>

	<div class="row mt-3 px-3">

		<div class="col-12 col-md-6 mt-5 ">

			<img src="{{asset('img/mapahome.png')}}" alt="" class="img-fluid">

		</div>

		<div class="col-12 col-md-6 px-3">

			<h1 class="card-title titulo-card-home">Vai descartar seus <span class="color-title">resíduos?</span></h1>
			<p class="card-text-sem-margem" >Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.

			<p class="card-text ">
			É só escolher sua cidade na caixa de pesquisa e o mapa mostrará os pontos de coleta de acordo com tipo de resíduo que você quer descartar.</p>
			</p>
			<!-- <h5>Saiba onde descartar seus resíduos</h5> -->
			<p></p>
			<a href="\mapa" class="btn btn-success btn-card">ACESSAR O MAPA</a>

		</div>
	</div>

</section>


<!-- fim banner -->


<main class="container-fluid no-gutters main-pag-home background-home">


		<div class="row no-gutters recicla-texto px-3">


			<div class="col-md-6 order-2 order-md-1 order-sm-1 order-lg-1 order-xl-1 texto-info-home px-3 d-block d-sm-block d-md-block d-lg-block d-xl-block px-3">
				<article>
					<h1 class="titulo-card-home-loja d-block d-sm-block d-md-block d-lg-block d-xl-block ">Visite nossa loja <span class="color-title">virtual!</span>
					</h1>

					<p class="card-text"> Você já pensou que algum produto poderia ser feito com material reciclado? O ReciclaMaps pensou, e temos vários parceiros que pensam como a gente, por isso nossa loja virtual tem uma variedade enorme de produtos sustentáveis e com processo de produção consciente.</p>
					<a href="\loja" class="btn btn-success btn-card">ACESSAR A LOJA</a>

				</article>
            </div>
            <div class="col-md-6 img-texto order-1 order-md-1 order-sm-1 order-lg-1 order-xl-1 d-block d-sm-block d-md-block d-lg-block d-xl-block">
                    <img src="{{asset('img/lojavirtual.png')}}" class="img-fluid " alt="Loja virtual">
                </div>
		</div>
</main>

<main class="container-fluid ">
	<!-- inicio reciclagem divulgaçao -->

	<div class="row no-gutters recicla-texto">
		<div class="col-md-6 texto-info-home px-3">
			<article>
				<h1 class="titulo-card-home d-none d-sm-none d-md-block d-lg-block d-xl-block ">Nossos <span class="color-title">Parceiros!</span>
				</h1>
				<h2 class="titulo-card-home d-block d-sm-block d-md-none d-lg-none d-xl-none">Nossos <span class="color-title">Parceiros !</span>
				</h2>
				<p class="texto-card-home card-text">Conheça nossos parceiros. A ReciclaMaps entende que o sucesso de qualquer organização não se faz sozinho e que o trabalho em parceria é fundamental. Por isso, nossas parcerias são feitas com base em valores e objetivos comuns e de acordo com modo de produção sustentável.</p>

			</article>
		</div>
		<div class="col-12 col-md-6 ">
			<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="{{asset('img/parceiros1.png')}}" alt="Primeiro Slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="{{asset('img/parceiros2.png')}}" alt="Segundo Slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="{{asset('img/parceiros3.png')}}" alt="Segundo Slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="{{asset('img/parceiros4.png')}}" alt="Segundo Slide">
					</div>

				</div>
				<a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon carrousel-icone" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Próximo</span>
				</a>
			</div>
		</div>

    </div>

</main>


<main class="container-fluid background-home d-none d-sm-block d-md-block d-lg-block d-xl-block">
        <div class="row no-gutters">
            <div class="col-md-6">
                    <div class="client-item">
                            <div class="client-icon">
                                <div class="border-img">
                                    <a href="team.html"><div class="window-tabs">
                                        <div class="overflow-block"></div><img src="img/img-team-1.png" alt></div>
                                    </a>
                                </div>
                            </div>
                            <h3>Nossa<span> Visão</span></h3>
                            <p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração </p>
                    </div>
                    <div class="client-item">
                            <div class="client-icon">
                                <div class="border-img">
                                    <a href="team.html"><div class="window-tabs">
                                        <div class="overflow-block"></div><img src="img/img-team-2.png" alt></div>
                                    </a>
                                </div>
                            </div>
                            <h3>Nossa<span> Missão</span></h3>
                            <p>Nosso compromisso é criar e oferecer conteúdo, serviços e produtos que contribuam para a ampliação da consciência dos indivíduos em suas ações de consumo rumo a uma relação mais equilibrada e harmoniosa consigo mesmo, com o outro e com o meio ambiente</p>
                    </div>
                    <div class="client-item">
                            <div class="client-icon">
                                <div class="border-img">
                                    <a href="team.html"><div class="window-tabs">
                                        <div class="overflow-block"></div><img src="img/img-team-3.png" alt></div>
                                    </a>
                                </div>
                            </div>
                            <h3>Nossos<span> Valores</span></h3>
                            <p>Acreditamos na capacidade das pessoas e empresas para, na dinâmica de suas relações, promoverem alternativas e adotarem escolhas que contribuam para o desenvolvimento de uma sociedade sustentável, alcançável através do desenvolvimento de um padrão </p>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="grid-col-4 title-innovation">
                            <div class="innovation-header">Sobre nós
                            <div class="slash-line"></div></div>
                        </div>
            </div>

        </div>
        </main>

<main class="container-fluid mt-3 d-none d-sm-block d-md-block d-lg-block d-xl-block">
        <div class="latest-news-area section-pt section-pb-80  bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title Start -->
                            <div class="section-title">
                                <h4>ULTIMAS NOTÍCIAS</h4>
                                <h3>Nosso <span>Blog</span></h3>
                            </div>
                            <!--// section-title End -->
                        </div>
                    </div>
                    <div class="row latest-blog-active">
                        <div class="col-lg-4">
                            <!-- single-latest-blog Start -->
                            <div class="single-latest-blog mb--30 mt--30">
                                <div class="latest-blog-image">
                                    <a href="/blog-details"><img src="img/blog-image1.jpg" alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="/blog-details" >Cargill instala linha de envase mais eficiente e sustentável</a></h3>

                                </div>
                            </div>
                            <!--// single-latest-blog End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- single-latest-blog Start -->
                            <div class="single-latest-blog mb--30 mt--30">
                                <div class="latest-blog-image">
                                    <a href="/blog-details"><img src="img/blog-image2.jpg" alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="/blog-details" >Gestora de recursos investe em inovação na área ambiental</a></h3>

                                </div>
                            </div>
                            <!--// single-latest-blog End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- single-latest-blog Start -->
                            <div class="single-latest-blog mb--30 mt--30">
                                <div class="latest-blog-image">
                                    <a href="/blog-details"><img src="img/blog-image3.jpg" alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="/blog-details" >O benefício do plástico reciclado</a></h3><br>

                                </div>
                            </div>
                            <!--// single-latest-blog End -->
                        </div>

                    </div>
                </div>
            </div>
</main>


	@endsection
