<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <script src="https://kit.fontawesome.com/da479675e4.js" crossorigin="anonymous"></script>

<!--- Custom CSS --->

    <style>
        body{ position:absolute;top:0;left:0;right:0;bottom:0; }
        body > .preventive{ position:absolute;top:50%;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:100%; }
        body > .preventive img{ display:block;margin:0 auto;max-width:250px;width:35%; }

        .slider .slick-dots {
    bottom: 25px;
  }
  .slider .slick-dots li button::before {
    font-size: 15px;
  }

  .slick-prev:before, .slick-next:before { font-family: FontAwesome; font-size: 30px; line-height: 1; color: white; opacity: 0.75; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }

  .slider .slick-prev {
  left: 10px;
  z-index: 999;
  }
  .slider .slick-prev:before { content: "\f053"; }
  [dir="rtl"] .slick-prev:before { content: "\f054"; }

  .slider .slick-next {
  right: 10px;
  z-index: 999;
  }
  .slider .slick-next:before { content: "\f054"; }
  [dir="rtl"] .slick-next:before { content: "\f053"; }

  .slick-dots li.slick-active button:before {
  opacity: .75;
  color: #fff;
  }

  .center .slick-prev:before, .slick-next:before { font-family: FontAwesome; font-size: 30px; line-height: 1; opacity: 0.75; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }

  .center .slick-prev {
  left: -50px;
  z-index: 999;
  }
  .center .slick-prev:before { content: "\f053"; color:black;}
  [dir="rtl"] .center .slick-prev:before { content: "\f054";}

  .center .slick-next {
  right: -50px;
  z-index: 999;
  }
  .center .slick-next:before { content: "\f054"; color: black;}
  [dir="rtl"] .center .slick-next:before { content: "\f053"; }



    </style>

<!---End of custom CSS --->

</head>

<body>
  <!--- navigation --->

    <div class="container mx-auto hidden md:block">
        <div class="flex py-3 items-center">
            <div class="w-3/5">
            <a href="{{ $site->url() }}"><img class="h-24" src="/images/logo-summit.svg" alt=""></a>
            </div>
            <div class="w-1/5 text-right">
                <p class="uppercase text-sm tracking-wider"><span class="text-blue-400"><i class="fas fa-phone-alt"></i> </span>Llamanos</p>
                <a class="text-gray-700 text-sm tracking-wider hover:text-gray-500" href="tel:3316998778">33 1699 8778</a>
            </div>
            <div class="w-1/5 text-right">
                <p class="uppercase text-sm tracking-wider"><span class="text-blue-400"><i class="far fa-envelope"></i> </span>Contáctanos</p>
                <a class="text-gray-700 text-sm tracking-wider hover:text-gray-500" href="mailto:atrejo@summit.mx">atrejo@summit.mx</a>
            </div>

        </div>
    </div>
    <div class="container mx-auto bg-blue-900 sticky top-0 md:-mb-8 z-50">
        <nav class="py-3 md:py-0 items-center px-5">
            <div class="flex md:hidden">
            <div class="w-1/2">
            <a href="{{ $site->url() }}"><img class="h-12" src="/images/iso-blanco.svg" alt="Logotipo"></a>  
            </div>

            <div class="w-1/2">
                <button class="text-2xl navbar-burger px-3 py-2 rounded text-white hover:text-blue-200 float-right">
                    <i class="fas fa-bars"></i>
                </button>
              </div>
            </div>
                
      
                <div id="main-nav" class="block md:flex hidden uppercase tracking-wider text-sm items-center">
                    <?php foreach ($site->children()->listed() as $subpage): ?> 
                    <h3><a href="<?= $subpage->url() ?>" class="text-center md:text-left block mt-4 md:inline-block lg:mt-0 text-white mr-4 hover:text-blue-200 ml-0 md:ml-5"><?= $subpage->title() ?></a></h3>
                    <?php endforeach ?>
                    <div class="text-center md:text-right block mt-4 lg:mt-0 text-white mr-4 hover:text-blue-200 ml-0 md:ml-5 bg-blue-500 px-5 py-5">
                        <h3><a href="/contacto">Contacto</a></h3>
                    </div>
                </div>
            
        </nav>

    </div>

<!--- End of navigation --->    

@yield('content')

<!--- Footer ---->

<footer class="py-8 md:pt-16" style="background-color: #1D2430;">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 px-5 md:px-0">
    <div>
      <h3 class="text-white uppercase text-sm py-2 text-center md:text-left">Acerca de nosotros</h3>
      <img class="py-2 h-24 mx-auto md:ml-0" src="/images/iso-azul.svg" alt="">
    <p class="text-gray-600 text-xs text-center md:text-left">{{ $site->acerca() }}</p>
    </div>
    <div>
      <h3 class="text-white uppercase text-sm py-2 text-center md:text-left">Navegación</h3>
      <?php foreach ($site->children() as $subpage): ?> 
      <p class="text-gray-600 text-xs"><a href="<?= $subpage->url() ?>" class="text-sm text-center md:text-left block mt-4 md:inline-block lg:mt-0 text-gray-600 mr-4 hover:text-gray-400 ml-0 md:ml-5"><?= $subpage->title() ?></a><p>
      <?php endforeach ?>
    </div>
    <div>
      <h3 class="text-white uppercase text-sm py-2 text-center md:text-left">Contacto</h3>
      <p class="text-center md:text-left"><a class="text-gray-600 text-sm tracking-wider hover:text-gray-200" href="tel:3316998778"><span class="text-blue-400"><i class="fas fa-phone-alt"></i> </span> 33 1699 8778</a></p>
      <p class="text-center md:text-left"><a class="text-gray-600 text-sm tracking-wider hover:text-gray-200" href="mailto:atrejo@summit.mx"><span class="text-blue-400"><i class="far fa-envelope"></i> </span> atrejo@summit.mx</a></p>
    </div>
    <div>
      <h3 class="text-white uppercase text-sm py-2 text-center md:text-left">Horario</h3>
      <p class="text-gray-600 text-sm text-center md:text-left"><?= $site->horario()->kti() ?></p>
    </div>
</div>
<div class="py-6"><p class="text-center text-sm text-gray-700">{{ $site->copyright() }}</p></div>
</footer>

<!-- End of footer and scripts --->

<script src="{{ mix('js/app.js') }}"></script>
<script src="/js/nav.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
<script>
    $('.slider').slick({
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
    });
</script>
<script>
    $('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
</script>
</body>
</html>
