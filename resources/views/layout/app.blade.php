
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Fshati CEGRAN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
   
  </head>

  <body>

    <div class="container">
      
      <div class="nav mb-auto mt-1 d-none d-lg-block" id="top-menu">
        <nav class="nav d-flex justify-content-between">
            <span class="p-2 text-muted">{{$date}} </span>
          <a class="p-2 text-muted" href="#"><i class="fa fa-child"></i> SHKA Jahi Hasani</a>
          <a class="p-2 text-muted" href="#">FH Cegrani-Zvicer</a>
          <a class="p-2 text-muted" href="#">FH Cegrani-Austri</a>
          <a class="p-2 text-muted" href="#"><i class="fa fa-volume-control-phone"></i> Kontakt</a>
          <a class="p-2 text-muted float-right" href="#"><i class="fa fa-volume-control-phone"></i> Kontakt</a>
          <a class="p-2 text-muted float-right" href="#"><i class="fa fa-volume-control-phone"></i> Kontakt</a>
        </nav>
      </div>
      <div class="col-md-13"> 
      <div class="mt-3 mb-3">
        <img src="https://cegrani.mk/wp-content/uploads/2019/08/Unbenannt-1-2.png" class="img-fluid" alt="Responsive image">
        @guest
        <div class="float-right mr-1 mt-1 d-none d-lg-block">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror mb-1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror mb-1" name="password" required autocomplete="current-password">
              <button type="submit" class="btn btn-primary">Lajmrohu</button>
              <a class="btn btn-success" href="/register">Regjistrohu</a>
            </form>
        </div>
        @endguest
        @auth
        <div class="float-right mr-1 mt-1 d-none d-lg-block">
          <p>Pershendetje: <strong> {{ Auth::user()->name }}</strong> </p>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">C'Lajmrohu</button>
          </form>
      </div>
      @endauth
      </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-light mb-2" id="main-menu">
        <a class="navbar-brand" href="/"><i class="fa fa-home"></i> Fillimi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item white">
              <a class="nav-link" href="/post"><i class="fa fa-newspaper-o"></i> Njoftime</a>
            </li>
            <li class="nav-item white">
              <a class="nav-link" href="#"><i class="fa fa-anchor"></i> Rezistenca</a>
            </li>
            <li class="nav-item white">
              <a class="nav-link" href="/arsimi"><i class="fa fa-futbol-o"></i> KF Arsimi</a>
            </li>
            <li class="nav-item white">
                <a class="nav-link" href="#"><i class="fa fa-university"></i> BL Cegran</a>
              </li>
              <li class="nav-item white">
                <a class="nav-link" href="#"><i class="fa fa-graduation-cap"></i> SH.F Perparimi</a>
              </li>
              <li class="nav-item white">
                <a class="nav-link" href="#"><i class="fa fa-street-view"></i> Personalitete</a>
              </li>
              <li class="nav-item white">
                <a class="nav-link" href="#"><i class="fa fa-globe"></i> Historia</a>
              </li>
              <li class="nav-item white">
                <a class="nav-link" href="#"><i class="fa fa-camera"></i> Galeria</a>
              </li>
          </ul>
        </div>
      </nav>
      @guest
      <div class="alert alert-warning" role="alert">
        <a href="/register" style="color: #000">Ju Mund te Regjistroheni ne kete faqe dhe te shperndani Fotot/Videot/Artikujt tuaja ne kete arhive te fshatit tone.</a> (Autori qe poston do ti shfaqet Emri)
      </div>
     @endguest
    <main role="main" class="container">
      <div class="row">
        @yield('content')

        <aside class="col-md-4 blog-sidebar">
         @auth
          <div class="card">
            <div class="card-header">Profili Juaj</div>
     <div class="card-body" >
      
      <p>Pershendetje: <strong>{{ Auth::user()->name }}</strong></p>
      <p>Profili Im</p>
      <p>Postimet e mia</p>
      <p>Publiko +</p>

      @if (Auth::user()->roli === 'admin')
        <a href="/admin">Paneli Administrativ</a>
      @endif

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">C'Lajmrohu</button>
      </form>
      </div>
      </div>         
      @endauth
  <div class="card">
    <div class="card-header">Kualiteti i Ajrit</div>
<div class="card-body" >

<div class="circle" id="circle" value="{{ $air }}">{{ $air }} - AQI</div>
<span>Stacioni Per matjen e ajrit gjendet ne Gostivar</span> 
</div>
</div>         
              <div class="card">
                  <div class="card-header">Të dhëna dhe statistika</div>
                  <div class="card-body" id="info">
                      <li>Krahina etnografike/gjeografike:  <strong>Pollog i Epërm</strong></li>
                      <li>Lartësia: <strong>555 m (m.n.d.)</strong></li>
                      <li>Zona Kohore: <strong>CET(UTC+1) Verore CEST(UTC+2)</strong></li>
                      <li>Kodi Postal: <strong>1237</strong></li>
                      <li>Prefiksi:<strong> (+389) 042</strong></li>
                      <li>Targa: <strong>GV</strong></li>
                      <li>Koordinatat: <strong>41° 50′ 20″ Veri 20° 58′ 32″ Lindje</strong></li>
                      <li>Popullsia: <strong>16,000 banorë</strong></li>
                  </div>
              </div>
                <div class="card">
                  <div class="card-header">Elsewhere</div>
            
              <div class="cardcc">
                <div class="card-body">
                  test
                </div>
        
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

  
    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/aqi.js"></script>
    <script src="https://use.fontawesome.com/7e0b61cf62.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
        <script type="text/javascript">
                    $(function(){
                var current_page_URL = location.href;
                $( "a" ).each(function() {
                    if ($(this).attr("href") !== "#") {
                    var target_URL = $(this).prop("href");
                    if (target_URL == current_page_URL) {
                        $('nav a').parents('li, ul').removeClass('active');
                        $(this).parent('li').addClass('active');
                        return false;
                    }
                    }
                });
                });
        </script>
        <script>
          $(function () {
           var $ticker = $('#news-ticker'),
             $first = $('li:first-child', $ticker);
           
           // put an empty space between each letter so we can 
           // use break word
           $('a', $ticker).each(function () {
               var $this = $(this),
                 text = $this.text();
              $this.html(text.split('').join('&#8203;'));
           });
           
           // begin the animation
           function tick($el) {
               $el.addClass('tick')
                 .on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                     
                   $el.removeClass('tick');
                     var $next = $el.next('li');
                     $next = $next.length > 0 ? $next : $first;
                   tick($next);
               });
           }
               
           tick($first);
           
       });
        </script>
     
  </body>
</html>
