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
                      <th>numri i posteve</th>
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
                        {{ $item->posts->count() }}
                        </td>
                      <td>
                        <a href="{{ route('cateogry.edit', $item->id) }}" class="btn btn-info">Ndryshoje</a>
                        </td>
                        <td>
                           <button class="btn btn-danger" onclick="handleDelete({{ $item->id }})">Fshije</button> 
                            </td>
                      </tr>    
                      @endforeach
                  </tbody>
              </table>
              <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
      
        <form action="" method="POST" id="deleteCategoryForm">
            @csrf
            @method('DELETE')

            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModal">Fshije Kategorine</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <p class="text-center text-bold">  Troni a ije i sigurt se don te fshejsh?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Jo, shko mbrapa</button>
                  <button type="submit" class="btn btn-danger">PO, Fshije</button>
                </div>
              </div>

        </form>


    </div>
  </div>
          </div>
      </div>
  
</div>

@endsection

@section('scripts')

<script>

    function handleDelete(id){
        
        var form = document.getElementById('deleteCategoryForm')
        form.action = '/cateogry/' + id
        $('#deleteModal').modal('show')
    }


</script>

@endsection