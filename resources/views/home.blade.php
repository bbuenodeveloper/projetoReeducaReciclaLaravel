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


<main class="container-fluid no-gutters main-pag-home">


		<div class="row no-gutters recicla-texto px-3">


			<div class="col-md-6 order-1 order-md-1 order-sm-1 order-lg-1 order-xl-1 texto-info-home px-3 d-block d-sm-block d-md-block d-lg-block d-xl-block px-3">
				<article>
					<h1 class="titulo-card-home-loja d-block d-sm-block d-md-block d-lg-block d-xl-block ">Visite nossa loja <span class="color-title">virtual!</span>
					</h1>

					<p class="card-text"> Você já pensou que algum produto poderia ser feito com material reciclado? O ReciclaMaps pensou, e temos vários parceiros que pensam como a gente, por isso nossa loja virtual tem uma variedade enorme de produtos sustentáveis e com processo de produção consciente.</p>
					<a href="\loja" class="btn btn-success btn-card">ACESSAR A LOJA</a>

				</article>
            </div>
            <div class="col-md-6 img-texto order-2 order-md-1 order-sm-1 order-lg-1 order-xl-1 d-block d-sm-block d-md-block d-lg-block d-xl-block">
                    <img src="{{asset('img/lojavirtual.png')}}" class="img-fluid " alt="Loja virtual">
                </div>
		</div>
	</main>




	<!-- Banner topo mobile loja -->

    <main class="container-fluid ">
            <!-- inicio reciclagem divulgaçao -->

            <div class="row no-gutters recicla-texto">

                <div class="col-md-6 img-texto">
                    <img src="{{asset('img/nature2.png')}}" class="img-fluid " alt="Por que reciclar?">
                </div>
                <div class="col-md-6 texto-info-home px-3">
                        <article>
                            <h1 class="titulo-card-home d-none d-sm-none d-md-block d-lg-block d-xl-block ">Por que <span class="color-title">reciclar ?</span>
                            </h1>
                            <h2 class="titulo-card-home d-block d-sm-block d-md-none d-lg-none d-xl-none">Por que <span class="color-title">reciclar ?</span>
                            </h2>
                            <p class="card-text">  Sabemos que o consumo de recursos naturais já é maior do que o planeta pode fornecer e essa realidade tende a crescer cada vez mais rápido. A reciclagem é a saída para um consumo mais responsável e o ReciclaMaps facilita sua busca pelos pontos de coleta adequados. </p>

                        </article>
                    </div>
            </div>
        </main>

        <!-- fim reciclagem divulgação -->



</div>

<!-- fim propaganda loja -->

<!-- inicio parceiros -->
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
	@endsection
