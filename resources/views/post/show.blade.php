@extends('layout.app')

@section('content')
 <div class="col-md-8">
    <div class="card">
        <div class="card-header"> {{ $post->title }} </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Publikuar: {{ $post->created_at }} | Kategoria: {{ $post->category->name }} | Autori: armend zekjiri</small></p>
            
            <p> <img class="img-rounded img-fluid" src="{{ asset($post->image) }}" alt=""> </p>
            {!! $post->content !!}
        </div>
    </div>
</div>   
@endsection 