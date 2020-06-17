@extends('layout.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.css">
@endsection
@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Krijo Nje Postim</div>
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
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titulli</label>
                        <input type="text" id="title" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Permbajtja</label>
                        <input id="content" type="hidden" name="content">
                        <trix-editor input="content"></trix-editor>
                    </div>
                    <div class="form-group">
                        <label for="image">Bashkangjitni nje foto</label>
                        <input type="file" id="image" class="form-control" name="image">
                    </div>
    
                    <div class="form-group">
                        <label for="category">Zgjidhni Kategorin</label>
                        <select name="category" class="form-control" id="category">
                           @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                           @endforeach
                        </select>
                    </div>
    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Shto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.js"></script>
@endsection