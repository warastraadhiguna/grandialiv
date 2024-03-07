<!-- Carousel -->
<section class="section-services section-t4" id="news">
<div class="container carousel-item-news mt-5">
  <div class="row mb-5">
    <div class="col-md-12 col-sm-12 text-center">
          <span class="title-landing-page-news">NEWS</span>
    </div>
  </div>

  <div id="leafCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-inner">

      @foreach($blogs as $key => $blog)
      <!-- Item 1 -->
      <div class="carousel-item {{ $key==0? 'active' :'' }}">
        <div class="d-flex justify-content-center align-items-center h-100">
          <!-- Kartu di dalam carousel item -->
          <div class="d-none d-md-block">
            <div class="card flex-row"  style="width: 800px; height: 300px">
              <img class="card-img-left card-img-responsive" src="{{ asset('storage/' . $blog->image_url)}}"/>
              <div class="card-body">
                <h4 class="card-title h5 h4-sm text-bold">{{ $blog->title }}</h4>
                <p class="card-text" style="text-align: justify;">{{ substr($blog->summary, 0, 100)  }}...</p>
                <a href="{{ URL::to('/blog/' . $blog->slug) }}" class="btn btn-link">Read More...</a>
              </div>
            </div>
          </div>
                    <!-- Kartu di dalam carousel item mobile-->
          <div class="d-md-none">
            <div class="card flex-row"  style="width: 280px; height: 300px">
              <img class="card-img-left " width="150%" src="{{ asset('storage/' . $blog->image_url)}}"/>
              <div class="card-body">
                <h4 class="card-title h5 h4-sm text-bold">{{ substr($blog->title, 0, 30)  }}...</h4>
                <p class="card-text" style="text-align: justify;">{{ substr($blog->summary, 0, 40)  }}...</p>
                <a href="{{ URL::to('/blog/' . $blog->slug) }}" class="btn btn-link"> More...</a>
              </div>
            </div>
          </div>
        </div>      
      </div>

      
      @endforeach

    </div>

    <!-- Tombol navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#leafCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#leafCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>

  
  <div class="row mt-2">
    <div class="col-md-12 text-center">
          <small class="text-white float-end" onclick="window.open('{{ URL::to('/blog') }}','_self')">All News</small>
    </div>
  </div>
              <hr />
</div>
</section>