<!-- ======= Intro Single ======= -->
<section class="intro-single">
    <div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
            <h1 class="title-single">All News</h1>

        </div>
        </div>
        <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                All News
            </li>
            </ol>
        </nav>
        </div>
    </div>
    </div>
</section><!-- End Intro Single-->

<!-- =======  Blog Grid ======= -->
<section class="news-grid grid">
    <div class="container">
    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
            <img src="{{ asset('storage/' . $blog->image_url)}}" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
            <div class="card-header-b">
                <div class="card-category-b">
                <a href="{{ URL::to('/blog/' . $blog->slug) }}" class="category-b">Read</a>
                </div>
                <div class="card-title-b">
                <h2 class="title-2">
                    <a href="{{ URL::to('/blog/' . $blog->slug) }}">{{ $blog->title }}
                    </a>
                </h2> 
                </div>
                <div class="card-date">
                <span class="date-b">{{ $blog->user->name }}<br/>{{ DateFormat($blog->created_at, "D MMMM Y") }}</span>
                </div>
            </div>
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
</section><!-- End Blog Grid-->

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