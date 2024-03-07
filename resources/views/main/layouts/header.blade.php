

 

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ URL::to('/') }}">
        {{-- Estate<span class="color-b">Agency</span> --}}
        {{-- <span class="color-b">{{ $company->name }}</span> --}}
        <img src="{{ asset('img/logo.png')}}" alt="{{ $company->name }}" width="30%">
      </a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          @if(Request::is('/') == false)
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
          </li>  
          @else
 
          <li class="nav-item">
            <a class="nav-link  d-none d-md-block" href="#home">Home</a>
            <a class="nav-link  d-md-none" href="{{ URL::to('/') }}">Home</a>            
          </li>      
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Product</a>
          </li>             
          <li class="nav-item">
            <a class="nav-link" href="#news">News</a>
          </li>             
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
         @endif          
        </ul>
      </div>

    </div>
  </nav><!-- End Header/Navbar -->