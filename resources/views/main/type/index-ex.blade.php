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
<!-- ======= Agents Grid ======= -->
    <section class="agents-grid grid">
      <div class="container">
        <div class="row">
          @foreach($category->types as $type)
                      <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="{{ asset('storage/' . $type->image_url)}}" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="#" class="link-two">{{  $type->title }}
                        <br> Type</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    {{  $type->note }}
                  </p>
                  <div class="info-agents color-a">
                    <table>
                      <tbody>
                        <tr>
                          <td><strong>Ukuran</strong></td>
                          <td>:</td>
                          <td>{{  $type->size }}</td>
                        </tr>
                        <tr>
                          <td><strong>Bangunan</strong></td>
                          <td>:</td>
                          <td>{{  $type->building_size }} m<sup>2</sup></td>
                        </tr>       
                        <tr>
                          <td><strong>Tanah</strong></td>
                          <td>:</td>
                          <td>{{  $type->land_size }} m<sup>2</sup></td>
                        </tr>           
                        <tr>
                          <td><strong>Kamar</strong></td>
                          <td>:</td>
                          <td>{{  $type->bedroom }}</td>
                        </tr>         
                        <tr>
                          <td><strong>Kamar Mandi</strong></td>
                          <td>:</td>
                          <td>{{  $type->bathroom }}</td>
                        </tr>                                                                         <tr>
                          <td><strong>Parkir</strong></td>
                          <td>:</td>
                          <td>{{  $type->carport }} Mobil, {{  $type->bike }} Motor</td>
                        </tr>            
                        <tr>
                          <td><strong>Harga</strong></td>
                          <td>:</td>
                          <td>Rp. {{  NumberFormat($type->price) }},-</td>
                        </tr>                                           
                      </tbody>
                    </table>
                  </div>
                </div>
                {{-- <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
          @endforeach

        </div>
        {{-- <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="#">
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div> --}}
      </div>
    </section><!-- End Agents Grid-->