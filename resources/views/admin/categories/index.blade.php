@extends('admin.layout')


@section('content')

<div class="container">
    <div class="d-flex justify-content-end">
        <a href="/cateogry/create" class="href btn btn-success float-right mt-2">Shto Kategory</a>
    </div>
      <div class="card mt-2">
          <div class="card-header">Te gjithe Kategorite</div>
          <div class="card-body">
              <table class="table">
                  <thead>
                      <th>Emri</th>
                      <th></th>
                      <th></th>
                  </thead>
                  <tbody>
                      @foreach ($categories as $item)
                      <tr>
                      <td>
                          {{ $item->name }}
                      </td>
                      <td>
                        <a href="{{ route('cateogry.edit', $item->id) }}" class="btn btn-info">Ndryshoje</a>
                        </td>
                        <td>
                            <a href="{{ route('cateogry.edit', $item->id) }}" class="btn btn-danger">Fshije</a>
                            </td>
                      </tr>    
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  
</div>

@endsection