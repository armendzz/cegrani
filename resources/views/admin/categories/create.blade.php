@extends('admin.layout')


@section('content')

<div class="container">
    <div class="card card-default mt-2">
        <div class="card-header">Shto Kategori</div>
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
        <form action="{{ route('cateogry.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Emri i Kategoris</label>
                    <input type="text" id="name" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Shto</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection