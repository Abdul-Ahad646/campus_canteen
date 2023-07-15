<x-app-layout>
    <x-fontend.layout.partials.head />
    @php
    $addCard=arrayCard();
    @endphp
    <div class="container border">
        <div class="row">
            <div class="col-lg-6">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control border border-2 border-black" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Shipping Address</label>
                        <input type="text" class="form-control border-2 border-black" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your phone with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                        <input type="text" class="form-control border-2 border-black" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your phone with anyone else.</div>
                    </div>

<form action="{{route('checkout')}}" method="post">
    @csrf
    <button class="btn btn-success" type="submit" id="sslczPayBtn"
        token="if you have any token validation"
        postdata=""
        order="If you already have the transaction generated for current order"
        endpoint="/pay-via-ajax"> Pay Now
</button>
</form>
     


                </form>
            </div>
            <div class="col-lg-6">
                
    <div class="p-3  border border-2 border-success" style="width:500; " >
        <h1>Add Card</h1>
 @forelse($addCard as $card)  
 @php
$product_image=App\Models\Product::where('id',$card['id'])->first();
 @endphp     
 <ul class="list-group list-group-horizontal-lg border-bottom 2 border-dark p-3" >

  <img alt="img" src="/product_image/{{ $product_image->product_image ?? ''}}"  style="width:50px; height:50px; "/>

  <li class="list-group-item">{{$card["name"]}}
  <li class="list-group-item">{{$card["quantity"]}}</li>
  <li class="list-group-item">{{$card["price"]}}</li>
  <a class="" href="{{route('addcard.delete',$card['id'])}}">delete</a>
</ul>
@empty
@endforelse

<div class="p-2 border border-1 border-warning">
<strong>subtotal:{{Cart::getSubTotal();}}</strong> <br>
</div>
            </div>
         
        </div>
    </div>
    <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
    <x-fontend.layout.partials.footer />
</x-app-layout>