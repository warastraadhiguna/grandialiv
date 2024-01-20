<!-- Carousel -->
<div class="container carousel-item-news">
  <div class="row">
    <div class="col-md-12">
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
        <div class="card flex-row"  style="width: 800px; height: 300px">
          <img class="card-img-left card-img-responsive" src="{{ asset('storage/' . $blog->image_url)}}"/>
          <div class="card-body">
            <h4 class="card-title h5 h4-sm text-bold">{{ $blog->title }}</h4>
            <p class="card-text" style="text-align: justify;">{{ substr($blog->summary, 0, 100)  }}...</p>
            <a href="{{ URL::to('/blog/' . $blog->slug) }}" class="btn btn-link">Read More...</a>
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
</div>