@extends('layout.app')


@section('content')

<div class="col-md-8 blog-main">
  <div class="mb-2" id="news-ticker">
    <div class="ticker-title ml-2">Breaking News: </div>
    <ul>
        <li>
            <a href="https://www.thetimes.co.uk/tto/news/uk/crime/article3999682.ece">No 10 armed police arrested over hardcore pornography</a>
        </li>
        <li>
            <a href="https://www.thetimes.co.uk/tto/environment/article3999530.ece">EDF extends life of UK nuclear plants</a>
        </li>
    </ul>
  </div>
  
  <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#home" class="nav-link active" data-toggle="tab">Home</a>
        </li>
        <li class="nav-item">
            <a href="#profile" class="nav-link" data-toggle="tab">Profile</a>
        </li>
        <li class="nav-item">
            <a href="#messages" class="nav-link" data-toggle="tab">Messages</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <h4 class="mt-2">Home tab content</h4>
            <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
        </div>
        <div class="tab-pane fade" id="profile">
            <h4 class="mt-2">Profile tab content</h4>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div class="tab-pane fade" id="messages">
            <h4 class="mt-2">Messages tab content</h4>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>
    </div>
</div>
<h2 style="color: red">Kualiteti i ajrit</h1>
  

  <h2 style="color: red">Temperatura ne Cegran momentalish</h1>

   <h1> {{ $sot['temperature'] }} C </h1>
   <h3 style="color: blue">oret e ardhshme</h1>
   
    <p> {{ substr($tempora['forecasts'][3]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }} C</strong></p> 
    <p> {{ substr($tempora['forecasts'][7]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }} C</strong></p> 
    <p> {{ substr($tempora['forecasts'][11]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }} C</strong></p> 
    <p> {{ substr($tempora['forecasts'][15]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }} C</strong></p> 
    <p> {{ substr($tempora['forecasts'][19]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }} C</strong></p> 
    <p> {{ substr($tempora['forecasts'][23]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }} C</strong></p> 
    <p> {{ substr($tempora['forecasts'][27]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }} C</strong></p> 
 <h2 style="color: red">Temperatura ne Cegran per 5 ditet e ardhshme</h1>


  @foreach (array_slice($temp['forecasts'],1) as $dita)
    <p>====================================</p>
    <p>Data: {{ $dita['dow'] }} </p>
    <p>Temperatura Minimale: {{ $dita['min_temp'] }} C</p>
    <p>Temperatura Maximale: {{ $dita['max_temp'] }} C</p>
    <p>Lindja e diellit: {{ substr($dita['sunrise'],0,10) }} <strong> {{ substr($dita['sunrise'],11,8) }}</strong></p>
    <p>Perendimi i Diellit: {{ substr($dita['sunset'],0,10) }} <strong> {{ substr($dita['sunset'],11,8) }}</strong></p>

  @endforeach





    <div class="blog-post mt-2">
      <h2 class="blog-post-title">Sample blog post</h2>
      <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

      <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
      <hr>
      <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
      <blockquote>
        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </blockquote>
      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      <h2>Heading</h2>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
      <h3>Sub-heading</h3>
      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      <pre><code>Example code block</code></pre>
      <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
      <h3>Sub-heading</h3>
      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <ul>
        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
        <li>Donec id elit non mi porta gravida at eget metus.</li>
        <li>Nulla vitae elit libero, a pharetra augue.</li>
      </ul>
      <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
      <ol>
        <li>Vestibulum id ligula porta felis euismod semper.</li>
        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
        <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
      </ol>
      <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
    </div><!-- /.blog-post -->

    <div class="blog-post">
      <h2 class="blog-post-title">Another blog post</h2>
      <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

      <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
      <blockquote>
        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </blockquote>
      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    </div><!-- /.blog-post -->

    <div class="blog-post">
      <h2 class="blog-post-title">New feature</h2>
      <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <ul>
        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
        <li>Donec id elit non mi porta gravida at eget metus.</li>
        <li>Nulla vitae elit libero, a pharetra augue.</li>
      </ul>
      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
    </div><!-- /.blog-post -->

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

  </div><!-- /.blog-main -->

 
@endsection