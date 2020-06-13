@extends('layout.app')




@section('content')
    
<div class="col-sm">
 
    @if(session()->has('sukses'))
    
    <div class="card d-none">
        <div class="card-header">Krijo Email @cegrani.mk</div>
        <div class="card-body">
 
       
             <form action="{{ route('mailcreate') }}" method="POST">
            @csrf
             <label class="sr-only">Username</label>
             <div class="input-group mb-2 mr-sm-2">
                 <input type="text" name="user" class="form-control" placeholder="Emri">
                 <div class="input-group-prepend">
                 <div class="input-group-text">@cegrani.mk</div>
               </div>
               
             </div>
                 <input class="form-control mb-2 mr-sm-2" type="password" name="passwd" placeholder="Fjalkalimi">
                 <input class="form-control mb-2 mr-sm-2" type="password" name="passwd2" placeholder="Rishkruaj Fjalkalimin">
             <button type="submit" class="btn btn-primary mb-2">Krijo Emailin</button>
         </form>
        </div>
    </div>

    @else   

    <div class="card">
        <div class="card-header">Krijo Email @cegrani.mk</div>
        <div class="card-body">
 
       
             <form action="{{ route('mailcreate') }}" method="POST">
            @csrf
             <label class="sr-only">Username</label>
             <div class="input-group mb-2 mr-sm-2">
                 <input type="text" name="user" class="form-control" placeholder="Emri">
                 <div class="input-group-prepend">
                 <div class="input-group-text">@cegrani.mk</div>
               </div>
               
             </div>
                 <input class="form-control mb-2 mr-sm-2" type="password" name="passwd" placeholder="Fjalkalimi">
                 <input class="form-control mb-2 mr-sm-2" type="password" name="passwd2" placeholder="Rishkruaj Fjalkalimin">
             <button type="submit" class="btn btn-primary mb-2">Krijo Emailin</button>
         </form>
        </div>
    </div>





    @endif
 
   <div class="alert alert-success" role="alert">
       <p > <h2 class="text-center"> Udhezime</h2></p>
    Pasi te Krijoni E-mailin ju mund ta perdorni duke u futur ne faqen: <a href="https://email.cegrani.mk">email.cegrani.mk</a>
    <hr>
    <p>Nese ju posedoni nje smartphone ju mund ta lidhni E-mailin direkt me aplikacionin tuaj duke perdorur serveret e faqes cegrani.mk</p>
   <p>Per ta lidhur smartphone tuaj perdorni:</p>
   <p>Per email-at qe pranojm zgjidheni opsionin <strong>IMAP</strong> dhe shkruani <strong>mail.cegrani.mk</strong> PORT: <strong>993</strong></p>
   <p>Per email-at qe dergojm  SMTP: <strong>mail.cegrani.mk</strong> PORT: <strong>465</strong></p>
   <p>Per Username perdorni emailin tuaj p.sh: <strong>emriim@cegrani.mk</strong> - username do ju kerkohet 2 her nje her per IMAP dhe nje her per SMTP.</p>
   <p>Nese hasni probleme mos hezitoni ne kontaktoni per te mare me shume udhzime.</p>
   <strong><p>Serveret Tone perdorin teknologjine SSL, emailet tuaja jan te mbrojtur me sigurine me te larte te mundshme.</p></strong>
    </div>
   <div class="alert alert-warning" role="alert">
    Nese ju krijoni E-mail, Ju nuk regjistroheni ne kete faqe automatikisht, ju duhet te regjistroheni ne kete faqe pasi te krijoni E-mail, ose mund te regjistroheni ne faqe me E-mailin tuaj.
  </div>

</div>

@endsection
