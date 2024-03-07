  <!-- ======= Footer ======= -->
  {{-- <section class="section-footer"> --}}
    {{-- <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">{ $company->name }}</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
              { $company->address . ' ' . $company->city  }}
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> { $company->phone }}
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> { $company->email }}
                </li>
              </ul>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">International sites</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Venezuela</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">China</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Philippines</a>
                </li>
              </ul>
            </div>
          </div>
        </div> --}}
      {{-- </div>
    </div> --}}
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          {{-- <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav> --}}
          {{-- <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div> --}}
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">{{ $company->name }}</span> All Rights Reserved.
            </p>
          </div>
          {{-- <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div> --}}
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="https://wa.me/{{ $company->phone }}" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>
<script>
  const baseUrl = '{{ URL::to("/") }}';
  function openDokumen(imgTitle, imgPath) {
    // $('#imageModal').modal({
    //     backdrop: 'static',
    //     show: true
    // });

    document.getElementById('modalTitleId').innerHTML =imgTitle;
    document.getElementById('modalImageId').src = imgPath;
    const myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
}

const numberWithCommas = (x) => {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function openType(object){
    document.getElementById('modalTitleId').innerHTML =object.title;

    const table = document.getElementById("type-table");

    while (table.rows.length > 0) {
        table.deleteRow(0);
    }    

    if(!object.types)return;

    object.types.forEach((type) => { 
        const newRow = table.insertRow();
        newRow.insertCell(0).innerHTML = 
        "<div class='card-box-a card-shadow'>"+
          "<div class='img-box-a'>"+
            "<img src='"+ baseUrl + "/storage/" + type.image_url +"' alt='"+ type.title +"' class='img-a img-fluid'>"+
            "</div>"+
            "<div class='card-overlay'>"+
              "<div class='card-overlay-a-content'>"+
                "<div class='card-header-a'>"+
                  "<h2 class='card-title-a'>"+
                    "<a>"+ type.title +
                      "<br/>size</a>"+
                  "</h2>"+
                "</div>"+
                "<div class='card-body-a'>"+
                  "<div class='price-box d-flex'>"+
                    "<span class='price-a'>Rp. "+ numberWithCommas(type.price) +",-</span>"+
                    "</div>"+
                    "</div>"+
                  "</div>"+
                "</div>"+
              "</div>";
    });

    const myModal = new bootstrap.Modal(document.getElementById('typeModal'));
    myModal.show();
}
</script>
</body>

</html>