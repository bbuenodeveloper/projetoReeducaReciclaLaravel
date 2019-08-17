<!DOCTYPE html>

<html lang="pt-BR">


<head>

        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#000000">
        <link rel="icon" href="img/favicon.png" sizes="16x16 32x32" type="image/jpg">

        <!-- Metas para o Google -->
        <title><?php @print($title); ?></title>
        <meta name="description" content="<?php @print($description); ?>">
        <meta name="keywords" content="<?php @print($keywords); ?>">

        <!-- Metas para o Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php @print($facebook_title); ?>" />
        <meta property="og:url" content="<?php @print($facebook_url); ?>" />
        <meta property="og:site_name" content="<?php @print($facebook_site_name); ?>" />
        <meta property="og:description" content="<?php @print($facebook_description); ?>" />
        <meta property="og:image" content="<?php @print($facebook_image); ?>" />
        <?php if (!empty($facebook_image_width)): ?>
        <meta property="og:image:width" content="<?php @print($facebook_image_width); ?>" /><?php endif ?>
        <?php if (!empty($facebook_image_height)): ?>
        <meta property="og:image:height" content="<?php @print($facebook_image_height); ?>" /><?php endif ?>
        <meta property="fb:app_id" content="501123709922257" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link rel='stylesheet'
    href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;'
    type='text/css' media='all' />
<link rel='stylesheet'
    href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;'
    type='text/css' media='all' />
<link rel='stylesheet'
    href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;'
    type='text/css' media='all' />
<link rel='stylesheet'
    href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;'
    type='text/css' media='all' />



        <link rel='stylesheet' href="{{asset('css/styleMenu.css')}}" type='text/css' media='all' />

        <link href="{{asset('css/stylesa361.css?ver=2.3')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/recicla-guide.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/dropdown.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet" type="text/css" />

        <link rel='stylesheet' href="{{asset('plugins/dl-menu/component.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('plugins/elegant-font/style.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('plugins/fancybox/jquery.fancybox.css')}}" type='text/css' media='all' />
        <link rel="stylesheet" href="{{asset('sweetalert/dist/sweetalert2.min.css')}}">

        <link rel='stylesheet' href="{{asset('plugins/superfish/css/superfish.css')}}" type='text/css' media='all' />



        <link rel="stylesheet" href="{{asset('css/reciclar/tablepress-responsive-flip.min7ef2.css')}}" type="text/css" media='all' />
        <link rel="stylesheet" href="{{asset('css/reciclar/google-maps-builder.min7406.css')}}" type="text/css" media='all' />
        <link rel="stylesheet" href="{{asset('css/reciclar/map-icons7406.css')}}" type="text/css" media='all' />
        <link rel="stylesheet" href="{{asset('css/reciclar/responsive.dataTables.min7ef2.css')}}" type="text/css" media='all' />

        <link rel="stylesheet" href="{{asset('css/reciclar/tablepress-combined.min9399.css')}}" type="text/css" media='all' />
        <link rel="stylesheet" href="{{asset('css/reciclar/google-maps-builder.min7406.css')}}" type="text/css" media='all' />
        <link rel="stylesheet" href="{{asset('css/stylea721.css')}}" type="text/css" media='all' />

        <link rel="stylesheet" href="{{asset('css/reciclar/accordion.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" media='all' />

        <link rel='stylesheet' href="{{asset('css/style-responsive.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('css/style-custom.css')}}" type='text/css' media='all' />
        <link href="href="{{asset('js/plugins/rev/css/layers.css')}}" rel="stylesheet" type="text/css" />
        <link href="href="{{asset('js/plugins/rev/css/navigation.css')}}" rel="stylesheet" type="text/css" />
        <link href="href="{{asset('js/plugins/rev/css/settings.css')}}"  rel="stylesheet" type="text/css" />
        <link href="href="{{asset('css/flaticon.css')}}" rel="stylesheet" type="text/css" />
        <link href="href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css" />
        <link href="href="{{asset('css/ihover.css')}}" rel="stylesheet" type="text/css" />
        <link href="href="{{asset('css/jquery-ui.css')}}" rel="stylesheet" type="text/css" />
        <link href="href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">






        <title>Recicla Maps</title>

        <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Google Page Speed Insights") === false): ?>
    <!-- O que tiver aqui dentro o page speed do Google não consegue ver -->
    <?php endif ?>



</head>

<body >



                <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
                                <!-- top navigation -->
                                <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm active p-0 ">
                                        <div class="container responsive-text">


                                            {{-- left --}}
                                                <div class="top-navigation-left ">
                                                        <div class="top-navigation-left-text text-white">
                                                            Bem Vindo à Recicla Maps </div>
                                                </div>


                                            {{-- fim left --}}

                                            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                                <span class="navbar-toggler-icon"></span>
                                            </button> --}}

                                            <div class="top-navigation-right " id="navbarSupportedContent">

                                                <!-- Right Side Of Navbar -->


                                                <ul class="navbar-nav ml-auto float-right">

                                                    <!-- Authentication Links -->
                                                    @guest
                                                    <li class="nav-item">
                                                            <div class="social-icon top-social-wrapper">

                                                        <a class="nav-link text-white" href="{{ route('login') }}"><i class="fas fa-user text-white p-2"></i>{{ __('Login') }}</a>
                                                            </div>
                                                    </li>
                                                    @if (Route::has('register'))
                                                    <li class="nav-item">
                                                            <div class="social-icon top-social-wrapper">
                                                        <a class="nav-link text-white" href="{{ route('register') }}"><i class="fas fa-sign-in-alt text-white p-2"></i>{{ __('Cadastro') }}</a>
                                                    </li>
                                                    @endif
                                                    @else
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fas fa-user text-white p-2"></i>
                                                        {{Auth::user()->name}}<span class="caret"></span>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                            @if (Auth::user()->nivel_user === 0)
                                                            <a class="dropdown-item" href="{{ route('painel') }}"><i class="fa fa-cog"></i><span class="space-menu"> {{ __('Painel Admin') }} </span></a>
                                                            @endif
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                            <i class="fa fa-sign-out"></i><span class="space-menu"> {{ __('Sair') }} </span>
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                                @endguest
                                            </ul>
                                        </div>


                                    {{-- container --}}
                                </nav>


                                <!-- end top navigation -->
                                <div id="greennature-header-substitute"></div>
                                <div class="greennature-header-inner header-inner-header-style-5">
                                    <div class="greennature-header-container container">
                                        <div class="greennature-header-inner-overlay"></div>
                                        <!-- logo -->
                                        <div class="greennature-logo">
                                            <div class="greennature-logo-inner">
                                                <a href="/home">
                                                    <img src="{{asset('img/logo_branco.png')}}" alt="" /> </a>
                                            </div>
                                            <div class="greennature-responsive-navigation dl-menuwrapper"
                                                id="greennature-responsive-navigation">
                                                <button class="dl-trigger">Open Menu</button>
                                                <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
                                                    <li
                                                        class="menu-item menu-item-home current-menu-item page_item page-item-5680 current_page_item">
                                                        <a href="/home" aria-current="page">Home</a></li>
                                                    <li class="menu-item menu-item-has-children menu-item-15"><a href="/como-reciclar">Como
                                                            Reciclar</a>

                                                    </li>
                                                    <li class="menu-item menu-item-has-children menu-item-15"><a href="/mapa">Mapa</a>

                                                    </li>
                                                    <li class="menu-item menu-item-has-children"><a
                                                            href="/loja">Loja</a>

                                                    </li>
                                                    <li class="menu-item menu-item-has-children"><a
                                                            href="/blog">Blog</a>

                                                    </li>
                                                    <li class="menu-item menu-item-has-children"><a
                                                            href="/contato">Contato</a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- navigation -->
                                        <div class="greennature-navigation-wrapper">
                                            <nav class="greennature-navigation sf-js-enabled sf-arrows" id="greennature-main-navigation">
                                                <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                                    <li class="menu-item menu-item-home greennature-normal-menu " ><a href="/home"><i
                                                                class="fa fa-home"></i>Home</a></li>
                                                    <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="/como-reciclar"
                                                            class="sf-with-ul-pre"><i class="fas fa-recycle"></i>Como Reciclar</a>

                                                    </li>
                                                    <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="/mapa"
                                                            class="sf-with-ul-pre"><i class="fas fa-map-marked-alt"></i>Mapa</a>

                                                    </li>
                                                    <li class="menu-item menu-item-has-children greennature-normal-menu ">
                                                        <a href="/loja" class="sf-with-ul-pre" ><i
                                                                class="fas fa-store-alt"></i>Loja</a>

                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-has-children greennature-normal-menu">
                                                        <a href="/blog" class="sf-with-ul-pre"><i
                                                                class="fas fa-blog"></i>Blog</a>

                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-has-children greennature-normal-menu">
                                                        <a href="/contato" class="sf-with-ul-pre"><i
                                                                class="fas fa-id-card"></i>Contato</a>

                                                    </li>

                                                </ul>


                                            </nav>
                                            <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>




                            </header>

            <main>
                    @yield('content')
            </main>


        </div>

{{-- footer  --}}


                <footer class="footer" id="footer">
                                <div class="container">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="emergency">

                                        <img src="img/logo_branco.png" width="200" alt="">
                                         </div>
                                     </div>
                                 </div>


                                 <div class="main-footer">
                                     <div class="row">

                                         <div class="col-md-4">

                                             <div class="useful-links">
                                                 <div class="title">
                                                     <h5>Links</h5>
                                                 </div>

                                                 <div class="detail">
                                                     <ul>

                                                         <li><a href="/h">Home</a></li>
                                                         <li><a href="/sobre">Sobre</a></li>
                                                         <li><a href="/comodescartar">Como Descartar</a></li>
                                                         <li><a href="/contato">Contato</a></li>
                                                         <li><a href="/mapa">Mapa</a></li>
                                                         <li><a href="/termos">Termos de Uso</a></li>
                                                         <li><a href="/loja">Loja</a></li>
                                                         <li><a href="/privacidade">Politica de Privacidade</a></li>
                                                         <li><a href="/blog">Blog</a></li>

                                                     </ul>
                                                 </div>

                                             </div>

                                         </div>

                                         <div class="col-md-4 mb-3">

                                             <div class="newsletter">
                                                 <div class="title">
                                                     <h5>NEWSLETTER</h5>
                                                 </div>

                                                 <div class="detail">

                                                         <div class="signup-text">
                                                             <i class="fa fa-envelope-open"></i>
                                                             <span>Inscreva-se com seu nome e e-mail para receber nossas atualizações.</span>
                                                         </div>

                                                         <div class="form">
                                                         <p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
                                                         <p class="subscribe_error" id="subscribe_error" style="display:none;"></p>

                                                         <form id="myform2"  method="post" dataroute="{{ route('home') }}">
                                                            @csrf
                                                             <input type="text" data-delay="300" placeholder="Seu nome" name="name" id="nameNews" class="input" >
                                                             <input type="email" data-delay="300" placeholder="Email" name="email" id="emailNews" class="input" >
                                                             {{-- <input name="Subscribe" type="submit" value="Assinar" onClick="validateSubscription();"> --}}
                                                        <button type="submit" class="btn btn-card btn-secondary" value="Assinar">Assinar</button>
                                                         </form>

                                                         </div>

                                                     </div>
                                                     {{-- @if ($errors->any())

                                                     <div class="alert alert-danger">
                                                         <ul>
                                                             @foreach ($errors->all() as $error)
                                                             <li>{{ $error }}</li>
                                                             @endforeach
                                                         </ul>

                                                     </div>
                                                     @endif

                                                     @if(isset($resultado))
                                                     @if($resultado) --}}

                                                    {{-- <div class="alert alert-success">
                                                         <h1>E-mail cadastrado com sucesso</h1>
                                                     </div>
                                                     @else
                                                     <h1>erro</h1>
                                                     @endif
                                                     @endif --}}

                                             </div>

                                         </div>
                                         <div class="col-md-4">

                                             <div class="get-touch">
                                                 <div class="title">
                                                     <h5>CONTATO</h5>
                                                 </div>

                                                 <div class="detail">
                                                     <div class="get-touch">


                                                         <span class="text">Conheça o projeto e compartilhe sua ideias com nossa equipe!</span>


                                                         <ul>
                                                             <li><i class="fa fa-map-marker"></i> <span>Recicla Maps, São Paulo, SP</span></li>
                                                             <li><i class="fa fa-phone"></i> <span>(11) 99999-1029</span></li>
                                                             <li><a href="#."><i class="fa fa-envelope"></i> <span>contato@reciclamaps.com.br</span></a></li>
                                                         </ul>

                                                     </div>
                                                 </div>

                                             </div>

                                         </div>

                                     </div>

                                 </div>

                             </div>

                             <div class="footer-bottom">
                                 <div class="container">
                                     <div class="row">

                                         <div class="col-md-6">
                                             <span class="copyrights">Copyright &copy; 2019 Recicla Maps. Todos os Direitos Reservados.</span>
                                         </div>

                                         <div class="col-md-6">
                                            <ul class="list-inline">
                                                <li class="list-inline-item m-t-10"><a href="" class="btn btn-facebook-footer"><i class="fab fa-facebook"></i></a>
                                                </li>
                                                <li class="list-inline-item m-t-10"><a href="" class="btn btn-twitter-footer"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item m-t-10"><a href="" class="btn btn-instagram"><i class="fab fa-instagram"></i></a>
                                                </li>

                                            </ul>
                                         </div>

                                     </div>
                                 </div>

                             </div>

                            </footer>







        <script src="{{url('https://code.jquery.com/jquery-3.4.0.min.js')}}"></script>
        <script src="{{asset('js/reciclar/jquery-2.1.0.min.js')}}"></script>

        <script src="{{asset('js/reciclar/map-icons7406.js')}}"></script>
        <script src="{{asset('js/reciclar/jquery.form.mind03d.js')}}"></script>
        <script src="{{asset('js/reciclar/google-maps-builder.min7406.js')}}"></script>

        <script src="{{asset('js/reciclar/scripts.js')}}"></script>
        <script src="{{asset('js/reciclar/accordion.js')}}"></script>
        <script src="{{asset('js/reciclar/jquery.datatables.minc245.js')}}"></script>


        <script type='text/javascript' src="{{asset('js/jquery.flexslider.js')}}"></script>
        <script src="{{asset('js/reciclar/front.mine8f3.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="https://kit.fontawesome.com/edcfdf1ead.js"></script>
        <script type='text/javascript' src="{{asset('plugins/jquery.transit.min.js')}}"></script>
        <script src="{{asset('js/plugins/jquery-ui/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/smoothscroll/smoothScroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/custom.js" type="text/javascript')}}"></script>
        <script src="{{asset('js/plugins/rev/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/rev/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/rev/js/revolution.extension.actions.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/rev/js/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/rev/js/revolution.extension.kenburn.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/rev/js/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/rev/js/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/rev/js/revolution.extension.video.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/rev/js/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
        <script src="{{asset('js/plugins/prettyphoto/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/rainyday/rainyday.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.mixitup.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/scrollReveal.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/circles.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/countto/jquery.countTo.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/countto/jquery.appear.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/parallax/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>
        <script type='text/javascript' src="{{asset('js/jquery/jquery-migrate.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/superfish/js/superfish.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/hoverIntent.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/dl-menu/modernizr.custom.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/dl-menu/jquery.dlmenu.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/jquery.easing.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/fancybox/helpers/jquery.fancybox-media.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/flexslider/jquery.flexslider.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/jquery.isotope.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/plugins.js')}}"></script>


</body>

</html>
