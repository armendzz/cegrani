@extends('layout.app')


@section('content')

<div class="col-md-8 blog-main">
  <div class="mb-2" id="news-ticker">
    <div class="ticker-title ml-2">Kryesore: </div>
    <ul>
      @foreach($posts as $p)
        <li>
        <a href="{{ route('post.show', $p->id) }}">{{ $p->title }}</a>
        </li>
        @endforeach
    </ul>
  </div>
  <div class="card">
<div class="card-header">Njoftime</div>
<div class="card-body">
  <ul class="list-unstyled">
    @foreach($njoftime as $n)
    <li class="media mb-2">
    <img src="{{ asset($n->image) }}" class="mr-3" alt="..." width="64px" height="64px">
      <div class="media-body">
      <h5 class="mt-0 mb-1"> <a href="{{ route('post.show', $n->id) }}">{{ $n->title }}</a></h5>
        {{ \Illuminate\Support\Str::limit(strip_tags($n->content),100,'...') }} - <a href="{{ route('post.show', $n->id) }}">Lexo Me Shume</a>
      </div>
    </li>
    @endforeach
  </ul>
</div>
</div>
  
<div class="d-none d-lg-block">
  <div class="card bg-info text-white">
      <div class="col-sm-12 mt-1"> <p class="temtitle">Temperatura Momentale</p></div>
     <div class="row  mb-auto">
      <div class="col-sm-2 mb-auto" id="tempico"><img src="/icon/{{ $sot['iconCode'] }}.png" alt=""> </div>
      <div class="col-sm-3 mb-auto" id="grada"> <h1 id="baba"> <strong>  {{ $sot['temperature'] }} °C</strong></h1> </div>
     <div class="col-sm-7  mb-auto" id="tjera"><p>{{ $sot['cloudCoverPhrase'] }}</p> <p>Kualiteti i Ajrit: <span>{{ $air }} - AQI</span> </p> <p>Gostivar, Cegran</p></div>
  
     
  </div>
  <div class="col-sm-12"> <p class="temtitle">Oret e ardhshme</p></div>
  <div class="row ml-2">
      <div class="col-sm"><span class="ora"><strong>{{ substr($tempora['forecasts'][3]['fcst_valid_local'],11,5) }}</strong></span>  <p>{{ $tempora['forecasts'][3]['temp'] }} °C</p> </div>
      <div class="col-sm"><span class="ora"><strong>{{ substr($tempora['forecasts'][7]['fcst_valid_local'],11,5) }}</strong></span> <p>{{ $tempora['forecasts'][7]['temp'] }} °C</p> </div>
      <div class="col-sm"><span class="ora"><strong>{{ substr($tempora['forecasts'][11]['fcst_valid_local'],11,5) }}</strong> </span><p>{{ $tempora['forecasts'][11]['temp'] }} °C</p> </div>
      <div class="col-sm"><span class="ora"><strong>{{ substr($tempora['forecasts'][15]['fcst_valid_local'],11,5) }}</strong></span> <p>{{ $tempora['forecasts'][15]['temp'] }} °C</p> </div>
      <div class="col-sm"><span class="ora"><strong>{{ substr($tempora['forecasts'][19]['fcst_valid_local'],11,5) }}</strong></span> <p>{{ $tempora['forecasts'][19]['temp'] }} °C</p> </div>
      <div class="col-sm"><span class="ora"><strong>{{ substr($tempora['forecasts'][23]['fcst_valid_local'],11,5) }}</strong> </span><p>{{ $tempora['forecasts'][23]['temp'] }} °C</p> </div>
      <div class="col-sm"><span class="ora"><strong>{{ substr($tempora['forecasts'][27]['fcst_valid_local'],11,5) }}</strong></span> <p>{{ $tempora['forecasts'][27]['temp'] }} °C</p> </div>
       </div>
 
  <div class="row ml-2">
   
     {{--  fillimi --}}

     <div class="col-sm-12 ditet">
      <ul class="nav nav-tabs">
          <li class="nav-item">
          <a href="#{{ $temp['forecasts'][1]['dow'] }}" class="nav-link active" data-toggle="tab">{{ $temp['forecasts'][1]['dow'] }}</a>
          </li>
          <li class="nav-item">
              <a href="#{{ $temp['forecasts'][2]['dow'] }}" class="nav-link" data-toggle="tab">{{ $temp['forecasts'][2]['dow'] }}</a>
          </li>
          <li class="nav-item">
            <a href="#{{ $temp['forecasts'][3]['dow'] }}" class="nav-link" data-toggle="tab">{{ $temp['forecasts'][3]['dow'] }}</a>
        </li>
        <li class="nav-item">
          <a href="#{{ $temp['forecasts'][4]['dow'] }}" class="nav-link" data-toggle="tab">{{ $temp['forecasts'][4]['dow'] }}</a>
      </li>
      <li class="nav-item">
        <a href="#{{ $temp['forecasts'][5]['dow'] }}" class="nav-link" data-toggle="tab">{{ $temp['forecasts'][5]['dow'] }}</a>
    </li>
      </ul>
      <div class="tab-content">
          <div class="tab-pane fade show active" id="{{ $temp['forecasts'][1]['dow'] }}">
              <h4 class="mt-2">{{ $temp['forecasts'][1]['dow'] }}</h4>
              <div class="col-md-6 float-left">
              <p>Temperatura Minimale: <strong>{{ $temp['forecasts'][1]['min_temp'] }}° C</strong></p> 
              <p>Temperatura Maximale: <strong>{{ $temp['forecasts'][1]['max_temp'] }}° C</strong></p>
              </div>
              <div class="col-md-6 float-right">
              
              <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][1]['sunrise'],11,8) }}</strong></p>
              <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][1]['sunset'],11,8) }}</strong></p>
            </div>
            </div>
          <div class="tab-pane fade" id="{{ $temp['forecasts'][2]['dow'] }}">
            <h4 class="mt-2">{{ $temp['forecasts'][2]['dow'] }}</h4>
            <div class="col-md-6 float-left">
            <p>Temperatura Minimale: <strong>{{ $temp['forecasts'][2]['min_temp'] }}° C</strong></p> 
            <p>Temperatura Maximale: <strong>{{ $temp['forecasts'][2]['max_temp'] }}° C</strong></p>
            </div>
            <div class="col-md-6 float-right">
            
            <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][2]['sunrise'],11,8) }}</strong></p>
            <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][2]['sunset'],11,8) }}</strong></p>
          </div>    
          </div>
          <div class="tab-pane fade" id="{{ $temp['forecasts'][3]['dow'] }}">
            <h4 class="mt-2">{{ $temp['forecasts'][3]['dow'] }}</h4>
            <div class="col-md-6 float-left">
            <p>Temperatura Minimale: <strong>{{ $temp['forecasts'][3]['min_temp'] }}° C</strong></p> 
            <p>Temperatura Maximale: <strong>{{ $temp['forecasts'][3]['max_temp'] }}° C</strong></p>
            </div>
            <div class="col-md-6 float-right">
            
            <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][3]['sunrise'],11,8) }}</strong></p>
            <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][3]['sunset'],11,8) }}</strong></p>
          </div>    
          </div>
        <div class="tab-pane fade" id="{{ $temp['forecasts'][4]['dow'] }}">
          <h4 class="mt-2">{{ $temp['forecasts'][4]['dow'] }}</h4>
          <div class="col-md-6 float-left">
          <p>Temperatura Minimale: <strong>{{ $temp['forecasts'][4]['min_temp'] }}° C</strong></p> 
          <p>Temperatura Maximale: <strong>{{ $temp['forecasts'][4]['max_temp'] }}° C</strong></p>
          </div>
          <div class="col-md-6 float-right">
          
          <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][4]['sunrise'],11,8) }}</strong></p>
          <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][4]['sunset'],11,8) }}</strong></p>
        </div>  
        </div>
      <div class="tab-pane fade" id="{{ $temp['forecasts'][5]['dow'] }}">
        <h4 class="mt-2">{{ $temp['forecasts'][5]['dow'] }}</h4>
            <div class="col-md-6 float-left">
            <p>Temperatura Minimale: <strong>{{ $temp['forecasts'][5]['min_temp'] }}° C</strong></p> 
            <p>Temperatura Maximale: <strong>{{ $temp['forecasts'][5]['max_temp'] }}° C</strong></p>
            </div>
            <div class="col-md-6 float-right">
            
            <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][5]['sunrise'],11,8) }}</strong></p>
            <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][5]['sunset'],11,8) }}</strong></p>
          </div>  
      </div>
      </div>
   
    </div>


      {{-- mbarimi --}}

  </div>
  
   <p class="text-right mt-1 mr-2">Shiko Me shume Detaje</p>
  </div>
    
  </div>

  <div class="row">
    <div class="col-sm-6">
  <div class="card">
    <div class="card-header">Historia</div>
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
  </div>
  <div class="col-sm-6">
  <div class="card">
    <div class="card-header">Personalitete</div>
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
  </div>
</div>
<div class="card-header">Rezistenca</div>
<div class="card-group mb-2">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div><!-- /.blog-main -->
@endsection

@section('widget')
<div class="card">
  <div class="card-header">Kualiteti i Ajrit</div>
<div class="card-body" >

<div class="circle" id="circle" value="{{ $air }}">{{ $air }} - AQI</div>
<span>Stacioni Per matjen e ajrit gjendet ne Gostivar</span> 
</div>
</div>   
@endsection