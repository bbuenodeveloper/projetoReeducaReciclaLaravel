@extends('layouts.appteste')

@section('content')

<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'mapahome.png';

$title = $facebook_title = "Como Reciclar";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Recicla, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 " src="img/slider0.png" alt="Primeiro Slide">
        <div class="carousel-caption d-none d-md-block class="copy">
            <p class="copy">Faça 1 coisa, <strong class="strong-color">Recicle.</strong></p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 attachment-full size-full wp-post-image" src="img/slide1-1.jpg" alt="Segundo Slide">
        <div class="carousel-caption d-none d-md-block class="copy">
          <p class="copy">Garrafas Plásticas <strong class="strong-color">não são lixo.</strong></p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/slide2-2.jpg" alt="Terceiro Slide">
        <div class="carousel-caption d-none d-md-block class="copy">
            <p class="copy">Até hoje, a reciclagem de garrafas PET economizou mais de 4,3 milhões de <strong class="strong-color">m3 de espaço em aterros.</strong></p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/slide3.jpg" alt="Terceiro Slide">
        <div class="carousel-caption d-none d-md-block class="copy">
        <p class="copy">Em 2018, a reciclagem de garrafas PET criou uma estimativa de <strong class="strong-color">68.000 oportunidades de renda.</strong></p>
        </div>
      </div>
    </div>


    {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a> --}}
  </div>




  <div class="meet-members">
    <div class="wrapper mx-auto"><h2>Aprenda como reciclar<b> cada tipo de material</b></h2><p><p>Nos cards abaixo, você pode aprender como reciclar cada tipo de material, escolha o material, clique no sinal de + e tenha todas as informações necessárias para reciclar de forma correta.</p>

    </div><!--/wrapper -->
  </div><!-- /meet-members -->


  <!-- cards  -->

  <div class="fourFeatures">
    <div class="block ">
      <img src="img/BIG-DUMPv2-copy.jpg" class="attachment-full size-full wp-post-image" alt=""  sizes="(max-width: 1500px) 100vw, 1500px" /><h3>Reciclar <strong>vidro</strong></h3>
      <p>Entende-se como reciclagem de vidro, o processo industrial de derretimento de resíduos de vidro.</p>

      <a href="javascript:void(0)" class="openOne">&plus;</a>
    </div>

    <div class="overlay one ">
      <a href="javascript:void(0)" class="openOne close">&minus;</a>
      <div class="overlay-content">

        <h3>Como reciclar garrafas de <strong>vidro?</strong></h3>
        <p>Na reciclagem de garrafas de vidro, se estiverem inteiras, elas devem ser lavadas. Se estiverem quebradas, você pode utilizar uma garrafa PET para embalá-las. Para isso, retire o rótulo da garrafa PET e descarte-o junto de outros plásticos recicláveis. Então corte a garrafa ao meio, insira os cacos da garrafa de vidro quebrada, utilize a parte superior da garrafa PET para tampar o recipiente e coloque-o dentro de uma sacola. Procure utilizar luvas ou pá e vassoura para não se ferir.Também recomenda-se que os cacos de vidro não sejam misturados com terra ou sujeira.</p>

      </div>
    </div>

    <div class="block alt">
      <img src="img/PETCO_Collection_BottleHand_2326.jpg" class="attachment-full size-full wp-post-image" alt=""  sizes="(max-width: 500px) 100vw, 500px" /><h3>Reciclar Alumínio</h3>
      <p>Reciclagem de alumínio é o processo pelo qual o alumínio pode ser reutilizado em determinados produtos, após ter sido inicialmente produzido. </p>

      <a href="javascript:void(0)" class="openTwo">&plus;</a>
    </div>

    <div class="overlay two alt">
      <a href="javascript:void(0)" class="openTwo close">&minus;</a>
      <div class="overlay-content">
        <h3>Confira o passo a passo da reciclagem do alumínio <strong>e gere renda</strong></h3>
        <p>O alumínio pode ser reciclado tanto a partir de sucatas geradas por produtos descartados, quanto por sobras do processo produtivo. Utensílios domésticos, latas de bebidas, esquadrias de janelas, componentes automotivos, entre outros, podem ser fundidos e empregados novamente na fabricação de novos produtos.</p>

      </div>
    </div>

    <div class="block ">
      <img src="img/slide3.jpg" class="attachment-full size-full wp-post-image" alt=""  sizes="(max-width: 1600px) 100vw, 1600px" /><h3>Reciclar <strong>Plástico</strong></h3>
      <p>Diversos produtos e embalagens feitos com material plástico apresentam um símbolo que indica que eles são recicláveis, de acordo com o tipo de plástico do qual são feitos. </p>

      <a href="javascript:void(0)" class="openThree">&plus;</a>
    </div>

    <div class="overlay three ">
      <a href="javascript:void(0)" class="openThree close">&minus;</a>
      <div class="overlay-content">
        <h3>Passo a passo de como reciclar  <strong>plástico</strong></h3>
        <p>Descubra mais sobre o programa de reciclagem de sua comunidade. Muitas cidades têm, hoje em dia, pontos de coleta e depósito de materiais recicláveis. No entanto, cada comunidade é diferente, então entre em contato com a prefeitura e pergunte sobre quais facilidades e opções estão disponíveis em sua área.</p>
        <p>Leve os plásticos diretamente ao local da reciclagem. Pesquise online ou telefone para autoridades locais para encontrar os centros de sua área. Se um centro aceitar plástico, você pode muito bem levá-los diretamente até ele.
          Alguns estabelecimentos de reciclagem podem pagar algum dinheiro por item que você levar. Você pode fazer algum dinheiro extra coletando material reciclável de amigos e vizinhos e levar aos pontos de coleta.</p>

        </div>
      </div>

      <div class="block alt">
        <img src="img/FII9175.jpg" class="attachment-full size-full wp-post-image" alt="" /><h3>Reciclar <strong>Papel</strong></h3>
        <p>A reciclagem de papel é o reaproveitamento do papel não-funcional para produzir papel reciclado. 1- A reciclagem de papéis velhos visa o aproveitamento de fibras celulósicas dos papéis e cartões usados para a produção de papéis novos.</p>

        <a href="javascript:void(0)" class="openFour">&plus;</a>
      </div>

      <div class="overlay four alt">
        <a href="javascript:void(0)" class="openFour close">&minus;</a>
        <div class="overlay-content">
          <h3>Como  <strong>descartar?</strong></h3>
          <p>1. Não jogue as embalagens em cestos com restos de outros resíduos, como óleo, comida e produtos químicos que podem “contaminá-lo”.</p>
          <p>2. Papéis sujos (contaminados) devem ser descartados no lixo orgânico.</p>
          <p>3. Armazene em local seco</p>
          <p>4. Se possível, separe por tipo de papel, como embalagens, papel de escritório, revistas, jornais, papelão, entre outros.</p>
        </div>
      </div>

      <!-- fim cards -->


    </div>



    <div class="more-news"><a href="#">ASSISTA NOSSO CANAL NO YOUTUBE</a>
    </div>



    <div class="homePageVideo">
      <div class="videoWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/pknTQ5L2VbE/?rel=0&amp;controls=0&amp;showinfo=0"> frameborder="0" allowfullscreen></iframe>
        <div class="title"><a href="#">2019 Recicla Maps</a></div>
      </div>
    </div>













    @endsection
