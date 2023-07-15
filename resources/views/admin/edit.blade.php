<x-fontend.layout.partials.dashboard>

    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('admin.update', ['product' => $product])}}" enctype="multipart/form-data">
        @csrf 
        @method('put')
        <div>
            <label>Product code</label>
            <input type="text" value="{{$product->product_code}}"  name="product_code" placeholder="Name" />
        </div>
        <div>
            <label>Product image</label>
            <input type="file" value="/product_image/{{ $product->product_image }}" id="img" name="product_image" />
            
        </div>
        <div>
            <label>Name</label>
            <input type="text" value="{{$product->name}}" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" value="{{$product->price}}" name="price" placeholder="Price" />
        </div>
        <div>
            <label>Condition</label>
            <input type="text" value="{{$product->condition}}" name="condition" placeholder="Condition" />
        </div>
        <div>
            <label>Availability</label>
            <input type="text" value="{{$product->availability}}" name="availability" placeholder="Availability" />
        </div>
        <div >
            <label for="">Status</label> 
            <select name="status" id="">
            <option value="1">Active</option>
            <option value="0">inactive</option>
        </select>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>

</x-fontend.layout.partials.dashboard>