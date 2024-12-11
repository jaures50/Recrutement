@extends('layouts.app')

@section('content')

<div class="container">




    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Trouvez le métier parfait que vous méritez.</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Découvrez le métier idéal qui reflète vos talents et aspirations.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Recherchez un emploi.</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Trouvez un talent.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Découvrez le poste idéal en startup fait pour vous.</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Explorez des opportunités uniques et trouvez l'emploi qui correspond parfaitement à vos ambitions.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Recherchez un emploi.</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Trouvez un talent.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control border-0" placeholder="Mot clé" />
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0">
                                <option selected>Category</option>
                                <option value="1">Category 1</option>
                                <option value="2">Category 2</option>
                                <option value="3">Category 3</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0">
                                <option selected>Localisation</option>
                                <option value="1">Localisation 1</option>
                                <option value="2">Localisation 2</option>
                                <option value="3">Localisation 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark border-0 w-100">Chercher</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explorez par catégorie.</h1>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                        <h6 class="mb-3">Marketing</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h6 class="mb-3">Service client</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h6 class="mb-3">Resources humaines</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                        <h6 class="mb-3">Gestion de projet</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                        <h6 class="mb-3">Développement commercial</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                        <h6 class="mb-3">Ventes et communication</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                        <h6 class="mb-3">Enseignement et éducation</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                        <h6 class="mb-3">Design et création</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-coins text-primary mb-4"></i>
                        <h6 class="mb-3">Finance</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                        <h6 class="mb-3"> Informatique et technologie</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-heartbeat text-primary mb-4"></i>
                        <h6 class="mb-3">Santé</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-gavel text-primary mb-4"></i>
                        <h6 class="mb-3">Juridique</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-cogs text-primary mb-4"></i>
                        <h6 class="mb-3">Ingénierie</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-truck text-primary mb-4"></i>
                        <h6 class="mb-3">Logistique</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-bed text-primary mb-4"></i>
                        <h6 class="mb-3">Hôtellerie</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-paint-brush text-primary mb-4"></i>
                        <h6 class="mb-3"> Arts et culture</h6>
                        <p style="font-weight:bold" class="mb-0">123 Offre d'emploi.</p>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Category End -->





</div>



<!-- Carousel End -->
@endsection