    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">About {{ $company->name }}</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  About
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

        <section class="section-about">
      <div class="container">

        <div class="row mb-5">
                      <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="{{ URL::to('storage/' .$company->about_url) }}" alt="" class="img-fluid  mx-auto d-block">
            </div>
            {{-- <div class="sinse-box">
              <h3 class="sinse-title">EstateAgency
                <span></span>
                <br> Sinse 2017
              </h3>
              <p>Art & Creative</p>
            </div> --}}
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 position-relative">
              <p>{!! $company->about_contain !!}</p>
          </div>
        </div>
      </div>
        </section>