@extends('layout.app')


@section('content')

<div class="col-md-8">
    <div class="card mt-2">
        <div class="card-header">Te gjithe Kategorite</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Emri</th>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                    <tr>
                    <td>
                        {{ $item->name }}
                    </td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection