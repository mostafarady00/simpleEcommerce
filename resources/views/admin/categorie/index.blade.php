<button style="background-color:blue"> <a href="{{ route('categories.create') }}">add orders</a></button>

 <table class="table table-bordered-" id="dataTable" width="100%" cellspacing="0" border="2" >
          <thead>
            <tr>

                <th>#</th>
                <th>categorie_name</th>
                <th>categorie_type</th>
                <th>categorie_price</th>
                <th>view</th>
                <th>EDIT</th>
                <th>UPDATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
                  <tr>
                    <td>{{$categorie->id}}</td>
                    <td>{{$categorie->categorie_name}}</td>
                    <td>{{$categorie->categorie_type}}</td>
                    <td>{{$categorie->categorie_price }}</td>
                    <td><button style="background-color:darkorange"><a href="categories/{{ $categorie->id }}">View</a></button></td>
                   <td> <button style="background-color:darkorange" > <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-info">Edit</a></button></td>
                   <td>
                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" style="background-color:red"   class="btn btn-danger">Delete</button>
                  </form>
              </td>
                </tr>
                @endforeach
</tbody>
</table>
