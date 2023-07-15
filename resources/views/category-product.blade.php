<x-app-layout>
<x-fontend.layout.partials.head/>

<div class="container" >
@forelse($products as $product)
    <div class="row mt-5">
      
        <div class="col-md-5 ">
        <img alt="img" src="/product_image/{{ $product->product_image }}" width="500px" />
        </div>
        <div class="col-md-7">
         
            <h2 class="text-success">{{$product->name ?? ''}}</h2>
            <p><b>Product Code: {{$product->product_code ?? ''}}</b></p>
            <p><b>Price: {{$product->price ?? ''}} TK.</b></p>
            <p><b>Condition: {{$product->condition ?? ''}}</b></p>
            
            
            <div class="btn-group ">
            <form action="{{route('add.card.store')}}" method="post" >
        @csrf 
        <label for="">
               <b> Quantity:</b>
            </label>
            <input type="number" name="quantity" min="1" value="1" step="1"  required>
      <input type="hidden" name="product_id" value="{{$product->id}}">
      <input type="hidden"  name="category_id" value="{{$product->category_id}}">
      <input type="hidden"  name="price" value="{{$product->price}}">
    <br>
      <div class="btn-group pt-3">
      <input type="submit" class="btn btn-outline-success btn-primary cart" value="Add to Card">
      </div>
       
        
    </form>
           
            </div>
           
        </div>
    </div>
  <br>
  <br>
    @empty
@endforelse
<br>
  </div>

<x-fontend.layout.partials.footer/>
</x-app-layout>