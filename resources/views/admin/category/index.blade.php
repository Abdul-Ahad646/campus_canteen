
<x-fontend.layout.partials.dashboard>

<div class="row">
			<div class="col-xl-12">
						
            <!-- Bordered table -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Category</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
					 
					
						 
					<a href="{{route('admin.category.create')}}">Add Category</a>
					<a href="slider_download_pdf.php">Download PDF</a>
					<!-- <a href="slider_download_xl.php">Download xl</a> -->
					
					  
						 | Trash (Delete | Restore) | Download XL | Download PDF | Print View
						  
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Id</th>
									<th>Category Name</th>
									<th>Discrefstion</th>
									<th>Category Image</th>
									<th>Status</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>

                  @foreach($categories as $category)
								<tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
									<td>{{$category->discrefstion}}</td>
                                    <td><img alt="img" src="/category_image/{{ $category->category_image }}" width="100px" /></td>                                
                                    <td>
										@if($category->status==1)
										<button class="btn btn-success">Active</button>
										@else
										<button class="btn btn-danger">Deactive</button>
										@endif
									</td>
									<td>
                                    <a href="">Show</a>  
										<a href="{{route('admin.category.create')}}">Add Category</a>
										<a href="{{route('admin.category.edit', ['category' => $category])}}">Edit</a> 
										<form method="post" action="{{route('admin.category.destroy', ['category' => $category])}}">
                                        @csrf 
                                        @method('delete')
                                        <input type="submit" value="Delete" />
										</form>
                                    </td> 
								</tr>
								@endforeach
						</tbody>
						</table>
					</div>
				</div>
				<!-- /bordered table -->
					</div>
				</div>

    

</x-fontend.layout.partials.dashboard>