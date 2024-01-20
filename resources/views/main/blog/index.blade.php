  <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{ $blog->title }}</h1>
              <span class="color-text-a">News</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  News
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="news-img-box">
              <img src="{{ asset('storage/' . $blog->image_url)}}" alt="" class="img-fluid mx-auto d-block">
            </div>
          </div>
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="post-information">
              <ul class="list-inline text-center color-a">
                <li class="list-inline-item mr-2">
                  <strong>Penulis: </strong>
                  <span class="color-text-a">{{ $blog->user->name }}</span>
                </li>
                <li class="list-inline-item">
                  <strong>Date: </strong>
                  <span class="color-text-a">{{ DateFormat($blog->created_at, "D MMMM Y") }}</span>
                </li>
              </ul>
            </div>
            <div class="post-content color-text-a">
              <p class="post-intro" style="text-align: justify;">
                {{ $blog->summary }} 
              </p>
              <p>{!! $blog->contain !!}</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Single-->