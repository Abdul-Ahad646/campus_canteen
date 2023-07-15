
<x-fontend.layout.partials.dashboard>

<div class="row">
			<div class="col-xl-12">
						
            <!-- Bordered table -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Product</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
					 
					
						 
					<a class="btn btn-primary" href="{{route('admin.create')}}">Add Product</a>
					<a class="btn btn-success" href="slider_download_pdf.php">Download PDF</a>
					<!-- <a href="slider_download_xl.php">Download xl</a> -->
					
					  
				 | Trash (Delete | Restore) | Download XL | Download PDF | Print View
						  
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">
							
							<tbody>
                           @foreach($categories as $key=>$category)
								<tr>
									<button class=" btn btn-suceess">	<th>Category Name</th>
									<td>{{$category->name}}</td></button>
									<tr>
									<th>#</th>
									<th>Product Code</th>
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Price</th>
                                    <th>Condition</th>
									<th>Availability</th>
									<th>Status</th>
                                    <th>Action</th>
								</tr>
						   @foreach($category->products as $product)
									<tr>
									<td>{{$product->id}}</td>
									<td>{{$product->product_code}}</td>
                                    <td><img alt="img" src="/product_image/{{ $product->product_image }}" width="100px" /></td>
									<td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->condition}}</td>
                                    <td>{{$product->availability}}</td>
									<td>
										@if($product->status==1)
										<button class="btn btn-success">Active</button>
										@else
										<button class="btn btn-danger">Deactive</button>
										@endif
									</td>
									<td>
										<div >
                                    <a title="show " class="btn btn-success btn-sm " href="">Show</a>  
										<a  title="add Now" class="btn btn-sm btn-primary " href="{{route('admin.create')}}">Add</i></a>
										<a class="btn btn-info" href="{{route('admin.edit', ['product' => $product])}}">Edit</a> 
										<form method="post" action="{{route('admin.destroy', ['product' => $product])}}">
                                        @csrf 
                                        @method('delete')
                                        <input class="btn btn-sm btn-danger" type="submit" value="Delete" />
										</form>
										</div>
                                    </td> 
									</tr>
										@endforeach
								
								 @endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!-- /bordered table -->



					</div>
				</div>

    

</x-fontend.layout.partials.dashboard>