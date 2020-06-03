@extends('admin.layout')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.css">
@endsection
@section('content')

<div class="container">
    <div class="card card-default mt-2">
        <div class="card-header">Shto Post</div>
        <div class="card-body">

        @if($errors->any())
            <div class="alert-danger">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('post.update', $post->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titulli</label>
                <input type="text" id="title" class="form-control" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Emri i Kategoris</label>
                   

                    <input id="content" type="hidden" name="content" value="{{ $post->content }}">
                    <trix-editor input="content"></trix-editor>
                </div>
                <img src="{{ asset($post->image) }}" alt="" width="300px" height="300px">
                <div class="form-group">
                    
                    <label for="image">Image</label>
                    <input type="file" id="image" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select name="category" class="form-control" id="category">
                       @foreach($categories as $c)
                    <option value="{{ $c->id }}"
                       
                    @if ($c->id === $post->category_id)
                        selected
                    @endif
                    >
                    
                        {{ $c->name }}
                    </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Ndrysho</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.js"></script>
@endsection