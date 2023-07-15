<x-fontend.layout.partials.dashboard>
    <h1>Order List </h1>

    <table class="table p-2">
        <tr>
            <th>#</th>
            <th>User Name</th>
            <th>Order Id</th>
            <th>Transaction Id</th>
            <th>Category Name</th>
            <th>Product Name</th>
            <th>Price/Quantity</th>
            <th>total Amount</th>
            <th>Action</th>

            @foreach($order_lists as $key=>$order_list)
            @php
            $product=App\Models\Product::where('id',$order_list->product_id)->first();
            @endphp
        </tr>
        <td>{{$key+1}}</td>
        <td>{{$order_list->name}}</td>
        <td>{{$order_list->id}}</td>
        <td>{{$order_list->transaction_id}}</td>
        <td>{{$product->category->name ??''}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}/{{$order_list->quantity}}</td>
        <td>{{$order_list->amount}}</td>

        <td>
            <a class="btn btn-success" href=""> delivery</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               View
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="jumbotron">
                                <table class="table">


                                    <tr>
                                        <th>Name:</th>
                                        <td>{{$order_list->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>phone:</th>
                                        <td>{{$order_list->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{$order_list->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{$order_list->address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Taotal Amount:</th>
                                        <td>{{$order_list->amount}}</td>
                                    </tr>



                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>
        @endforeach
        </tr>

    </table>


</x-fontend.layout.partials.dashboard>