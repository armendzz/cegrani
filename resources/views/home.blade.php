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

    
 
    <h2 style="color: rgb(255, 255, 255)">Temperatura ne Cegran momentalish</h1>
   
      <div class="col-md-2 d-inline-block">
        <img src="https://www.shkabaj.net/moti/img/icons/116Night.png" alt="" class="src"> <h1>{{ $sot['temperature'] }} C</h1>
    </div>
  

  
  
    
    asd 
    

   <h3 style="color: blue">oret e ardhshme</h1>
   
    <p> <span class="border"> {{ substr($tempora['forecasts'][3]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }}° C</strong></span>
      <span class="border"> {{ substr($tempora['forecasts'][7]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }}° C</strong> </span>
      <span class="border">  {{ substr($tempora['forecasts'][11]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }}° C</strong></span>
      <span class="border">  {{ substr($tempora['forecasts'][15]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }}° C</strong></span>
      <span class="border"> {{ substr($tempora['forecasts'][19]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }}° C</strong> </span>
      <span class="border">  {{ substr($tempora['forecasts'][23]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }}° C</strong></span>
      <span class="border">  {{ substr($tempora['forecasts'][27]['fcst_valid_local'],11,5) }} <strong> {{ $tempora['forecasts'][3]['temp'] }}° C</strong></span></p> 
  <h5>Temperatura ne Cegran per 5 ditet e ardhshme</h5>
  <div class="bs-example">
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
            
            <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][1]['sunset'],11,8) }}</strong></p>
            <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][1]['sunrise'],11,8) }}</strong></p>
          </div>
          </div>
        <div class="tab-pane fade" id="{{ $temp['forecasts'][2]['dow'] }}">
          <h4 class="mt-2">{{ $temp['forecasts'][2]['dow'] }}</h4>
          <div class="col-md-6 float-left">
          <p>Temperatura Minimale: <strong>{{ $temp['forecasts'][2]['min_temp'] }}° C</strong></p> 
          <p>Temperatura Maximale: <strong>{{ $temp['forecasts'][2]['max_temp'] }}° C</strong></p>
          </div>
          <div class="col-md-6 float-right">
          
          <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][2]['sunset'],11,8) }}</strong></p>
          <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][2]['sunrise'],11,8) }}</strong></p>
        </div>    
        </div>
        <div class="tab-pane fade" id="{{ $temp['forecasts'][3]['dow'] }}">
          <h4 class="mt-2">{{ $temp['forecasts'][3]['dow'] }}</h4>
          <div class="col-md-6 float-left">
          <p>Temperatura Minimale: <strong>{{ $temp['forecasts'][3]['min_temp'] }}° C</strong></p> 
          <p>Temperatura Maximale: <strong>{{ $temp['forecasts'][3]['max_temp'] }}° C</strong></p>
          </div>
          <div class="col-md-6 float-right">
          
          <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][3]['sunset'],11,8) }}</strong></p>
          <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][3]['sunrise'],11,8) }}</strong></p>
        </div>    
        </div>
      <div class="tab-pane fade" id="{{ $temp['forecasts'][4]['dow'] }}">
        <h4 class="mt-2">{{ $temp['forecasts'][4]['dow'] }}</h4>
        <div class="col-md-6 float-left">
        <p>Temperatura Minimale: <strong>{{ $temp['forecasts'][4]['min_temp'] }}° C</strong></p> 
        <p>Temperatura Maximale: <strong>{{ $temp['forecasts'][4]['max_temp'] }}° C</strong></p>
        </div>
        <div class="col-md-6 float-right">
        
        <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][4]['sunset'],11,8) }}</strong></p>
        <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][4]['sunrise'],11,8) }}</strong></p>
      </div>  
      </div>
    <div class="tab-pane fade" id="{{ $temp['forecasts'][5]['dow'] }}">
      <h4 class="mt-2">{{ $temp['forecasts'][5]['dow'] }}</h4>
          <div class="col-md-6 float-left">
          <p>Temperatura Minimale: <strong>{{ $temp['forecasts'][5]['min_temp'] }}° C</strong></p> 
          <p>Temperatura Maximale: <strong>{{ $temp['forecasts'][5]['max_temp'] }}° C</strong></p>
          </div>
          <div class="col-md-6 float-right">
          
          <p>Lindja e Diellit: <strong>{{ substr($temp['forecasts'][5]['sunset'],11,8) }}</strong></p>
          <p>Perendimi i Diellit: <strong>{{ substr($temp['forecasts'][5]['sunrise'],11,8) }}</strong></p>
        </div>  
    </div>
    </div>
  </div>


    
  



  




    

  </div><!-- /.blog-main -->

 
@endsection