@extends('admin.layout')


@section('content')

<div class="container">
    <div class="d-flex justify-content-end">
        <a href="{{ route('adminpostc') }}" class="href btn btn-success float-right mt-2">Shto Post</a>
    </div>
      <div class="card mt-2">
          <div class="card-header">Te gjithe Postet e fshira</div>
          <div class="card-body">
              <table class="table">
                  <thead>
                      <th>image</th>
                      <th>title</th>
                      <th></th>
                      <th></th>
                  </thead>
                  <tbody>
                      @foreach ($post as $item)
                      <tr>
                        <td>
                            <img src="{{ asset($item->image) }}" alt="" width="60px" height="60px">
                        </td>
                        <td>
                            {{ $item->title }}
                        </td>
                      <td>
                        

                        <form action="{{ route('adminpostrs', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
    
                          <button type="submit" class="btn btn-info"">Riktheje</button> 
                        </form>
                        <form action="{{ route('post.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                          <button type="submit" class="btn btn-danger"">Fshije pergjithmon</button> 
                        </form>
                        </td>
                     
                      </tr>    
                      @endforeach
                  </tbody>
              </table>
            

          </div>
      </div>
     
</div>
 

@endsection
