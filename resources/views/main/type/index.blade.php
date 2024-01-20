    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{ $category->title }}</h1>
              <span class="color-text-a">House Types</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Types
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
        @foreach($category->types as $type)

          <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('storage/' . $type->image_url)}}" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.html">{{ $type->title }}
                          <br /> {{ $type->size }}</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Rp. {{ NumberFormat($type->price) }},-</span>
                      </div>
                      {{-- <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a> --}}
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Building</h4>
                          <span>{{ $type->building_size }}m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Land</h4>
                          <span>{{ $type->land_size }}m
                            <sup>2</sup>
                          </span>
                        </li>                        
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>{{ $type->bedroom }}</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>{{ $type->bathroom }}</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Carport</h4>
                          <span>{{ $type->carport }}</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Bike</h4>
                          <span>{{ $type->bike }}</span>
                        </li>                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
          </div>
                     @endforeach      
        </div>
      </div>
    </section><!-- End Property Grid Single-->