<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>La Famiglia</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{url("cliente/css/bootstrap.min.css")}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{url("cliente/css/style.css")}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{url("cliente/css/responsive.css")}}">
<!-- fevicon -->
<link rel="icon" href="{{url("cliente/images/fevicon.png")}}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{url("cliente/css/jquery.mCustomScrollbar.min.css")}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="{{url("cliente/css/owl.carousel.min.css")}}">
<link rel="stylesheet" href="{{url("cliente/css/owl.theme.default.min.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
      <nav class="destop_header navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cliente/sobrenos">Nós</a>
            </li>
            <li class="nav-item">
              <a class="logo_main" href="/"><img src="{{url("cliente/images/logo.png")}}"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cliente/cardapio">Cardapio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pedido</a>
            </li>
            <li class="nav-item">
            @if (Route::has('login'))
                <div class="nav-link">
                    @auth
                        <a href="/dashboard" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    @endauth
                </div>
            @endif
            </li>
                     
          </ul>
        </div>
      </nav>
      <nav class="mobile_header navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo_main"><a href="/"><img src="{{url("cliente/images/logo.png")}}"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sobrenos">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cliente/cardapio">Cardapio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pedido</a>
            </li>            
          </ul>
        </div>
      </nav>
    </div>
    
    @yield('content')

    <div class="footer_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h1 class="footer_taital">Manu</h1>
            <div class="footer_menu">
              <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/sobrenos">Sobre Nós</a></li>
                <li><a href="/cliente/cardapio">Cardapio</a></li>
                <li><a href="#">Pedido</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <h1 class="footer_taital">Social Link</h1>
            <div class="social_icon">
              <ul>
                <li><a href="https://www.instagram.com/pizzaria_o_casarao_/"><img src="{{url("cliente/images/instagram-icon.png")}}"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{url("cliente/js/jquery.min.js")}}"></script>
    <script src="{{url("cliente/js/popper.min.js")}}"></script>
    <script src="{{url("cliente/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{url("cliente/js/jquery-3.0.0.min.js")}}"></script>
    <script src="{{url("cliente/js/plugin.js")}}"></script>
    <!-- sidebar -->
    <script src="{{url("cliente/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
    <script src="{{url("cliente/js/custom.js")}}"></script>
    <!-- javascript --> 
    <script src="{{url("cliente/js/owl.carousel.js")}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
</body>
</html>