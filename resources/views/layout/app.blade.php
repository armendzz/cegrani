
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
        </nav>
      </div>

      <div class="border mt-1 mb-1">
        <img src="https://cegrani.mk/wp-content/uploads/2019/08/Unbenannt-1-2.png" class="img-fluid" alt="Responsive image">

      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-light mb-2" id="main-menu">
        <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Fillimi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item white">
              <a class="nav-link" href="#"><i class="fa fa-newspaper-o"></i> Njoftime</a>
            </li>
            <li class="nav-item white">
              <a class="nav-link" href="#"><i class="fa fa-anchor"></i> Rezistenca</a>
            </li>
            <li class="nav-item white">
              <a class="nav-link" href="#"><i class="fa fa-futbol-o"></i> KF Arsimi</a>
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
     
    <main role="main" class="container">
      <div class="row">
        @yield('content')

        <aside class="col-md-3 blog-sidebar">
         
              <div class="card">
                  <div class="card-header">About</div>
           <div class="card-body">
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        </div>
        

          
              <div class="card">
                  <div class="card-header">Archives</div>
              
              <div class="card-body">
                  <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
              </div>
            </div>
          

          
              <div class="card">
                  <div class="card-header">Elsewhere</div>
            <div class="card-body">
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
        </div>
        
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
  </body>
</html>
