@extends('admin.layout')

@section('css')
<link href="/css/tem.css" rel="stylesheet">
@endsection



@section('content')


<div class="container">
    <div class="col-md-8 d-none d-lg-block">
<div class="card bg-info text-white">
    <div class="col-sm mt-1"> <p class="temtitle">Temperatura Momentale</p></div>
   <div class="row  mb-auto">
    <div class="col-sm-2 mb-auto" id="tempico"><img src="https://www.shkabaj.net/moti/img/icons/116Night.png" alt=""> </div>
    <div class="col-sm-3 mb-auto" id="grada"> <h1 id="baba"> <strong>  22 C</strong></h1> </div>
   <div class="col-sm-7  mb-auto" id="tjera"><p>asdasdasd</p> <p>asdasdasd</p> <p>asdasdasd</p></div>

   
</div>

<div class="col-sm"> <p class="temtitle">Oret e ardhshme</p></div>
<div class="row ml-2">
    <div class="col-sm "><strong>21:00</strong> <p>16 C</p> </div>
    <div class="col-sm "><strong>21:00</strong> <p>16 C</p></div>
    <div class="col-sm "><strong>21:00</strong> <p>16 C</p></div>
    <div class="col-sm "><strong>21:00</strong> <p>16 C</p></div>
    <div class="col-sm "><strong>21:00</strong> <p>16 C</p></div>
    <div class="col-sm "><strong>21:00</strong> <p>16 C</p></div>
    <div class="col-sm "><strong>21:00</strong> <p>16 C</p></div>
</div>
<div class="col-sm"> <p class="temtitle">Ditet e Ardhshme</p></div>
<div class="row ml-2">
    <div class="col-sm ">
        <div id="dita"><strong>E Premte</strong></div>
        <div>Min: 7 C</div>
        <div>Max: 20 C</div> 
    </div>
    <div class="col-sm ">
        <div id="dita"><strong>E Premte</strong></div>
        <div>Min: 7 C</div>
        <div>Max: 20 C</div> 
    </div><div class="col-sm ">
        <div id="dita"><strong>E Premte</strong></div>
        <div>Min: 7 C</div>
        <div>Max: 20 C</div> 
    </div><div class="col-sm ">
        <div id="dita"><strong>E Premte</strong></div>
        <div>Min: 7 C</div>
        <div>Max: 20 C</div> 
    </div><div class="col-sm ">
        <div id="dita"><strong>E Premte</strong></div>
        <div>Min: 7 C</div>
        <div>Max: 20 C</div> 
    </div>

</div>

 <p class="text-right mt-1 mr-2">Shiko Me shume Detaje</p>
</div>
  
</div>
</div>





@endsection
