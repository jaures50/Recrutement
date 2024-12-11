@extends('layouts.app')

@section('content')


<!-- Header End -->
<div class="container-xxl py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Category</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Category</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


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



<!-- Back to Top -->
<a href="/" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection