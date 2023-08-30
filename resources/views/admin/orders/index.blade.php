<button style="background-color:blue"> <a href="{{ route('orders.create') }}">add orders</a></button>

 <table class="table table-bordered-" id="dataTable" width="100%" cellspacing="0" border="2" >
          <thead>
            <tr>

                <th>#</th>
                <th>order_name</th>
                <th>order_title</th>
                <th>order_price</th>
                <th>order_des </th>
                <th>view</th>
                <th>EDIT</th>
                <th>UPDATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                  <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->order_name}}</td>
                    <td>{{$order->order_title }}</td>
                    <td>{{$order->order_price }}</td>
                    <td>{{$order->order_desc }}</td>
                    <td><button style="background-color:darkorange"><a href="orders/{{ $order->id }}">View</a></button></td>
                   <td> <button style="background-color:darkorange" > <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-info">Edit</a></button></td>
                   <td>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" style="background-color:red"   class="btn btn-danger">Delete</button>
                  </form>
              </td>
                </tr>
                @endforeach
</tbody>
</table>





