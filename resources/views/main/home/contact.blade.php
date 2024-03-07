    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            {{-- <div class="title-wrap d-flex">
              <div class="title-box"> --}}
                <h1 class="title-landing-page-content text-capitalize">Contact Us</h1>
              {{-- </div>
            </div> --}}

          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-7">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row d-none d-md-block">
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

        
      <hr/>
      </div>
    </section><!-- End Services Section -->

  