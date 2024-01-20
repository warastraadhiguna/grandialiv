    <section class="section-services section-t4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-landing-page-content">{{ $company->type_title }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="note-landing-page-content">{{ $company->type_note }}</div>
                </div>
            </div>
            <hr />
        </div>
        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
        $categoryLength = sizeOf($categories);
                $i = 0;
                $j = 0;
                ?>
                @while($i < $categoryLength) <div class="carousel-item {{ $i == 0? 'active' : '' }}">
                    <div class="container">
                        <div class="card-wrapper container-sm d-flex  justify-content-around row  mx-auto">
                            <div class="col-sm-1 col-md-1 my-auto mx-auto">
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                            </div>
                            <div class="col-sm-10 col-md-3 my-auto mx-auto">
                                <div class="card mx-auto my-auto d-none d-md-block" style="border: none">
                                    <img src="{{ asset('storage/' . $categories[$j]->image_url)}}"
                                        class="card-img-top img-fluid mx-auto my-auto" alt="...">
                                    <div
                                        class="position-absolute top-0 start-50 translate-middle-x text-center text-bold">
                                        <h5 class="text-white text-uppercase">{{ $categories[$j]->title }}</h5>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $j++;
                $j = $j >= $categoryLength ? 0 : $j;
                ?>
                            <div class="col-sm-10 col-md-4 my-auto mx-auto">
                                <div class="card mx-auto my-auto d-none d-md-block" style="border: none">
                                    <div class='image-wrapper'>
                                        <img src="{{ asset('storage/' . $categories[$j]->image_url)}}"
                                            class="card-img-top img-fluid mx-auto my-auto" alt="...">
                                        <div
                                            class="position-absolute top-0 start-50 translate-middle-x text-center text-bold">
                                            <h5 class="text-white text-uppercase">{{ $categories[$j]->title }}</h5>
                                        </div>
                                        <div class="position-absolute bottom-0  start-50  translate-middle-x text-center text-bold"
                                            style="top: 60%;">
                                            <a id='detail-here' href="{{ URL::to('/type/' . $categories[$j]->slug) }}">Detail Here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                    $j++;
                $j = $j >= $categoryLength ? 0 : $j;
                ?>
                            <div class="col-sm-10 col-md-3 my-auto mx-auto">
                                <div class="card mx-auto my-auto" style="border: none">
                                    <img src="{{ asset('storage/' . $categories[$j]->image_url)}}"
                                        class="card-img-top img-fluid mx-auto my-auto" alt="...">
                                    <div
                                        class="position-absolute top-0 start-50 translate-middle-x text-center text-bold">
                                        <h5 class="text-white text-uppercase">{{ $categories[$j]->title }}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-1 col-md-1 my-auto mx-auto">
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
        <hr/>
            </div>
        </div>
        <?php
                        $i++;
                $j = $i;
                ?>
        @endwhile


        </div>
    </section>