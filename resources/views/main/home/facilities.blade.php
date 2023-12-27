    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Facilities</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($facilities as $facility)
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="{{ $facility->icon }}"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">{{ $facility->title }}</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  {{ $facility->note }}
                </p>
              </div>
            </div>
          </div>  
          @endforeach                                  
        </div>
      </div>
    </section><!-- End Services Section -->