<x-fontend.layout.partials.dashboard>
<h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <div class="col-lg-8">
    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('post')
        <div class="form-group p-2">
            <label>Category Name</label>
           <select class="from-select p-2" name="category_id" id="">
           <option value="">Please Select</option>
            @foreach($catagories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
           </select>
        </div>
        <div class="form-group">
            <label>Product code</label>
            <input type="text" class="form-control" name="product_code" placeholder="Name" />
        </div>
        <div>
            <label>Product image</label>
            <input type="file" class="form-control" id="img" name="product_image" >
        </div>
        <div>
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" class="form-control" name="price" placeholder="Price" />
        </div>
        <div>
            <label>Condition</label>
            <input type="text" class="form-control" name="condition" placeholder="Condition" />
        </div>
        <div>
            <label>Availability</label>
            <input type="text" class="form-control" name="availability" placeholder="Availability" />
        </div> <br>
        <div >
            <label for="">Status</label> 
            <select name="status" id="">
            <option value="1">Active</option>
            <option value="0">inactive</option>
        </select>
        </div>
      <br>
        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>
    </div>
   


</x-fontend.layout.partials.dashboard>
