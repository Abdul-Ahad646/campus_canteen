<nav class="navbar navbar-expand-lg navber-light bg-light  ">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">Cumpus</span>Canteen</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link" href="{{route('home_page')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Product Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
              </li>
              <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Registration</a>
          </li>
        
            </ul>
         
          </div>
        </div>
      </nav>