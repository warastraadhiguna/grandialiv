    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            {{-- <div class="title-wrap d-flex">
              <div class="title-box"> --}}
                <h1 class="title-landing-page-content text-capitalize">{{ $company->facility_title }}</h1>
              {{-- </div>
            </div> --}}

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            {{-- <div class="title-wrap d-flex">
              <div class="title-box"> --}}
                <div class="note-landing-page-content">{{ $company->facility_note }}</div>
              {{-- </div>
            </div> --}}

          </div>
        </div>        
        <hr/>

          <div class=" d-none d-md-block ">        
        <div class="row">

          @foreach($facilities as $facility)
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex mx-auto">
                {{-- <div class="card-box-ico">
                  <span class="{{ $facility->icon }}"></span>

                </div> --}}
                {{-- <div class="card-title-c align-self-center">
                  <h2 class="title-c">{{ $facility->title }}</h2>
                </div> --}}
              </div>
              {{-- <div class="card-body-c">
                <p class="content-c">
                  {{ $facility->note }}
                </p>
              </div> --}}
                <img src="{{ asset('storage/' . $facility->image_url)}}" width="100%"/>
            </div>
          </div>  
          @endforeach                                  
        </div>
        </div>
          <div class="carousel slide d-md-none" data-bs-ride="carousel" >
            <div class="carousel-inner">

              @foreach($facilities as $key => $facility)
              <!-- Item 1 -->
              <div class="carousel-item {{ $key==0? 'active' :'' }}">
                <div class="d-flex justify-content-center align-items-center h-100">

                    <div class="card flex-row" >
                        <img src="{{ asset('storage/' . $facility->image_url)}}" width="100%"/>

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
      <hr/>
      </div>
    </section><!-- End Services Section -->

  