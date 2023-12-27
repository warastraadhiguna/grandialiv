    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Type</h2>
              </div>
              {{-- <div class="title-link">
                <a href="property-grid.html">All Property
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div> --}}
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
            @foreach($types as $type)
            <div class="carousel-item-b swiper-slide">
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
            </div><!-- End carousel item -->
            @endforeach            
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->