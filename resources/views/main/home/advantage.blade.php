    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            {{-- <div class="title-wrap d-flex justify-content-between">
              <div class="title-box"> --}}
                <h2 class="title-landing-page-content text-capitalize">Advantages</h2>
              {{-- </div>
            </div> --}}
          </div>
        </div>
            <hr />
        <div id="testimonial-carousel" class="swiper  d-none d-md-block ">
          <div class="swiper-wrapper">

          <?php 
            $i=0;
            $sizeOfAdvangates = sizeof($advantages);
          ?>
          @while(true)

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-3">
                    <div class="testimonial-ico">
                      <img src="{{ asset('storage/' . $advantages[$i]->image_url)}}" alt="" class="img-fluid" >
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        {{ $advantages[$i]->note }}
                      </p>
                    </div>
                    <div class="testimonial-author-box  text-center">
                      <h5 class="testimonial-author">{{ $advantages[$i]->title }}</h5>
                    </div>
                  </div>  
                  @if($i+1 < $sizeOfAdvangates)
                  <div class="col-sm-12 col-md-3">
                    <div class="testimonial-ico">
                      <img src="{{ asset('storage/' . $advantages[$i+1]->image_url)}}" alt="" class="img-fluid" >
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        {{ $advantages[$i+1]->note }}
                      </p>
                    </div>
                    <div class="testimonial-author-box  text-center">
                      <h5 class="testimonial-author">{{ $advantages[$i+1]->title }}</h5>
                    </div>
                  </div>  
                  @endif                  
                  @if($i+2 < $sizeOfAdvangates)
                  <div class="col-sm-12 col-md-3">
                    <div class="testimonial-ico">
                      <img src="{{ asset('storage/' . $advantages[$i+2]->image_url)}}" alt="" class="img-fluid" >
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        {{ $advantages[$i+2]->note }}
                      </p>
                    </div>
                    <div class="testimonial-author-box  text-center">
                      <h5 class="testimonial-author">{{ $advantages[$i+2]->title }}</h5>
                    </div>
                  </div>          
                  @endif      
                  @if($i+3 < $sizeOfAdvangates)
                  <div class="col-sm-12 col-md-3">
                    <div class="testimonial-ico">
                      <img src="{{ asset('storage/' . $advantages[$i+3]->image_url)}}" alt="" class="img-fluid" >
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        {{ $advantages[$i+3]->note }}
                      </p>
                    </div>
                    <div class="testimonial-author-box  text-center">
                      <h5 class="testimonial-author">{{ $advantages[$i+3]->title }}</h5>
                    </div>
                  </div>          
                  @endif                                                                           
                </div>
              </div>
            </div><!-- End carousel item -->
            <?php 
              $i+=4;
              if($i >= $sizeOfAdvangates)break;
            ?>
          @endwhile
          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

          <div class="carousel slide d-md-none" data-bs-ride="carousel" >
            <div class="carousel-inner">

              @foreach($advantages as $key => $advantage)
              <!-- Item 1 -->
              <div class="carousel-item {{ $key==0? 'active' :'' }}">
                <div class="row">
                  <div class="col-sm-12 col-md-3">
                    <div class="testimonial-ico">
                      <img src="{{ asset('storage/' . $advantage->image_url)}}">
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        {{ $advantage->note }}
                      </p>
                    </div>
                    <div class="testimonial-author-box  text-center">
                      <h5 class="testimonial-author">{{ $advantage->title }}</h5>
                    </div>
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


            <hr />
      </div>
    </section><!-- End Testimonials Section -->