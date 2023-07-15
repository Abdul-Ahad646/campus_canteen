<x-fontend.layout.partials.dashboard>
<h1>Create a Category</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form class="" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('post')
        <div class="col-md-12 p-0 pt-4 pb-1 ">
            <label>Category Name</label>
            <input type="text" name="name" placeholder="Category Name" />
        </div>
        
        <div class="col-md-12 p-0 pt-0 pb-0">
            <label>Discrefstion </label>
            <input type="text" name="discrefstion" placeholder="Category Discrefstion" />
        </div>

        <div class="col-md-12 p-0 pt-1 pb-1">
            <label>Category image</label>
            <input type="file" id="img" name="category_image" >
        </div>
        <div >
            <label for="">Status</label> 
            <select name="status" id="">
            <option value="1">Active</option>
            <option value="0">Deactive</option>
        </select>
        </div>
        
        <div class="">
            <input type="submit" value="Save a New Product" />
        </div>
    </form>


</x-fontend.layout.partials.dashboard>
