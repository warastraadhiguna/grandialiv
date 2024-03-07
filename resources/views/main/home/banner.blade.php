  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro intro-carousel swiper position-relative mt3  d-none d-md-block ">

    <div class="swiper-wrapper">
      @foreach($banners as $banner)
          <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('{{ asset('storage/' . $banner->image_url)}}')">
          </div>
      @endforeach
    </div>
    <div class="swiper-pagination"></div> 
  </div><!-- End Intro Section -->
  <div id="home-mobile" class="carousel slide d-md-none" data-bs-ride="carousel" style="margin-top:100px">
    <div class="carousel-inner">

      @foreach($banners as $key => $banner)
      <!-- Item 1 -->
      <div class="carousel-item {{ $key==0? 'active' :'' }}">
        <div class="d-flex justify-content-center align-items-center h-100">

            <div class="card flex-row" >
              <img class="card-img-left" width="150%" src="{{ asset('storage/' . $banner->image_url)}}"/>

            </div>

        </div>      
      </div>

      
      @endforeach

    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#leafCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#leafCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 

 