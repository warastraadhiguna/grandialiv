    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            {{-- <div class="title-wrap d-flex">
              <div class="title-box"> --}}
                <h1 class="title-landing-page-content">{{ $company->facility_title }}</h1>
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
        
      <hr/>
      </div>
    </section><!-- End Services Section -->

  