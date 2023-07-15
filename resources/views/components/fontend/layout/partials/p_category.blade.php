<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>
</head>
<body>
  <section id="productlist" class="productlist section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Our Product Category</h2>
                    <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Ipsum, sit officia? </p>


                </div>
            </div>
        </div>
<br>
<div class="row">
@forelse($categories as $category)
      
          <div class="col-12 col-md-12 col-lg-4 gy-4">
            <div class="card  text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="/category_image/{{ $category->category_image }}" alt=""  width="100%" height="100%">
                </div>
                <h3 class="card-title">{{$category->name}}</h3>
                <p>{{$category->discrefstion}}</p>
                
                <a href="{{route('category.filter',$category->id)}}" class="btn bg-warning text-dark">See Product</a>
              </div>
            </div>
          </div>
      @empty
      @endforelse
      </div>
  </section>
</body>
</html>