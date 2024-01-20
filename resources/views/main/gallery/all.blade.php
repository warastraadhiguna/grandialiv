   <!-- =======Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Gallery</h1>
              <span class="color-text-a"></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Gallery
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
        @foreach($galleries as $gallery)
          <div class="col-md-4" onclick="openDokumen('{{ $gallery->title }}', '{{ asset('storage/' . $gallery->image_url)}}')">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="{{ asset('storage/' . $gallery->image_url)}}" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      {{-- <a href="#" class="link-two">Margaret Sotillo
                        <br> Escala</a> --}}
                        <span>{{ $gallery->title }}</span>
                    </h3>
                  </div>
                </div>
                {{-- <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
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
    <div class="row">
        <div class="col-sm-12">
        <nav class="pagination-a">
            <ul class="pagination justify-content-end">
            <li class="page-item  {{ $page ==1? 'disabled' : "" }}">
                <a class="page-link" href="#" onclick="reloadPage({{ -1 }})" tabindex="-1">
                <span class="bi bi-chevron-left"></span>
                </a>
            </li>

            @for($i = 1; $i <= $totalPage; $i++)
            <li class="page-item  {{ $page == $i? 'active' : "" }}">
                <a class="page-link" href="#"  onclick="reloadPage({{ $i }})">{{ $i }}</a>
            </li>
            @endfor   

            <li class="page-item next {{$page == $totalPage? 'disabled' : "" }}">
                <a class="page-link" href="#"  onclick="reloadPage({{ -2 }})">
                <span class="bi bi-chevron-right"></span>
                </a>
            </li>
            </ul>
        </nav>
        </div>
    </div>
      </div>
    </section><!-- End Agents Grid-->



<!-- Modal -->
<div class="modal fade modal-xl" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modalImageId" src="" alt="Gallery" class="img-d img-fluid d-block mx-auto">
      </div>
    </div>
  </div>
</div>

    <script>


  function reloadPage(page){
    if(page == -1 )
    {
        let nowPage = <?= $page; ?>;
        if(nowPage > 1)
        {
            page = nowPage - 1;    
        }
    }
    else if (page == -2)
    {
        let nowPage = <?= $page; ?>;
        let totalPage = <?= $totalPage; ?>;      
        if(nowPage != totalPage)
        {
            page = nowPage + 1;     
        }  
    }

    window.open(window.location.pathname + '?page=' + page, '_self');
  }
</script>