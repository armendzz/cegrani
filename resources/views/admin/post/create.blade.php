@extends('admin.layout')


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
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Titulli</label>
                    <input type="text" id="title" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Emri i Kategoris</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Shto</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection