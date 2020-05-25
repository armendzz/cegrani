@extends('layout.app')

@section('content')
 <div class="col-md-9">
   @foreach ($post as $l)
   <div class="card">
    <div class="card-header" id="arsimi-card">KF Arsimi - Facebook</div>
    <div class="card-body">
        <p class="card-text"> {{ $l->created_time->date }} </p>
       <p> <strong> {{ $l->message }} </strong></p>
       
        @if (isset($l->attachments))
            @if (isset($l->attachments[0]->media->source))
            <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D{{ substr($l->id, -16) }}%26id%3D122738611080872&show_text=false&width=552&appId=203320346977357&height=309" width="552" height="309" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            @else
            @if (isset($l->attachments[0]->subattachments))

            @foreach ($l->attachments[0]->subattachments as $foto)
            <img src="{{ $foto->media->image->src }}" class="img-fluid mt-2" alt="Responsive image">
            <div><a download href="{{ $foto->media->image->src }}" class="btn btn-success mt-1">Shkarko Kete Foto</a></div>
            @endforeach
            
            @else
            
            <img src="{{ $l->attachments[0]->media->image->src }}" class="img-fluid" alt="Responsive image">
            <div><a href="{{ $l->attachments[0]->media->image->src }}" class="btn btn-success mt-1" download>Shkarko Kete Foto</a></div>
            @endif
            @endif
             @else 
        @endif
</div>
</div>
   @endforeach
</div>   
@endsection