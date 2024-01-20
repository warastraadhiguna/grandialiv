    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Advantages</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
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

      </div>
    </section><!-- End Testimonials Section -->