

   <button style="background-color:blue"> <a href="{{ route('products.create') }}">add products</a></button>
</bre>


            @foreach ($products as $product)



                <div class="product">
                    <a href="products/{{ $product->id }}">
                        <img src="products/uploads/{{ $product->img }}">
                    </a>
                    <div class="product-detail">
                        <h3>{{ $product->title }}</h3>
                        <h2>{{ $product->desc }}</h2>
                        <p>{{ $product->price }}</p>
                        <button style="background-color:darkorange" > <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">Edit</a></button>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red"   class="btn btn-danger">Delete</button>
                        </form>
                    </div>

              @endforeach

