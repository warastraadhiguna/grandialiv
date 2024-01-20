   <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Contact Us</h1>
              {{-- <span class="color-text-a">Aut voluptas consequatur unde sed omnis ex placeat quis eos. Aut natus officia corrupti qui autem fugit consectetur quo. Et ipsum eveniet laboriosam voluptas beatae possimus qui ducimus. Et voluptatem deleniti. Voluptatum voluptatibus amet. Et esse sed omnis inventore hic culpa.</span> --}}
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contact
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-7">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="contact-map box">
                        <div id="map" class="contact-map">
                            {!! $company->maps_frame !!}
                        </div>
                        </div>
                    </div>

                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Hubungi Kami</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">Email.
                        <span class="color-a">{{ $company->email }}</span>
                      </p>
                      <p class="mb-1">Phone.
                        <span class="color-a">{{ $company->phone }}</span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Temukan Kami</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                             {{ $company->address}}
                        <br> {{ $company->city  }}
                      </p>
                    </div>
                  </div>
                </div>                                        
                {{-- <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="bi bi-share"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Social networks</h4>
                    </div>
                    <div class="icon-box-content">
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-youtube" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div> --}}
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-whatsapp"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title"><a href="https://api.whatsapp.com/send?phone={{ $company->phone }}" class="btn btn-sm btn-success">Hubungi Kami</a></h4>                       

                    </div>
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->