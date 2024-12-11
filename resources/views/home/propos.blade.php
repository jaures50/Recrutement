@extends('layouts.app')

@section('content')

<!-- Header End -->
<div class="container-xxl py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">À propos de nous</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">À propos</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="img/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">Nous aidons à trouver le meilleur emploi et à dénicher des talents</h1>
                <p class="mb-4">Notre mission est de connecter les talents avec les meilleures opportunités professionnelles. Nous croyons fermement que chaque individu mérite de trouver l'emploi qui lui correspond, et chaque entreprise mérite de dénicher les talents qui contribueront à sa réussite.</p>
                <p><i class="fa fa-check text-primary me-3"></i> Nous simplifions la recherche de talents et d'opportunités</p>
                <p><i class="fa fa-check text-primary me-3"></i> Nous accompagnons les candidats à chaque étape de leur parcours professionnel</p>
                <p><i class="fa fa-check text-primary me-3"></i> Nos solutions sont personnalisées pour répondre aux besoins spécifiques des entreprises et des candidats</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="">En savoir plus</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Back to Top -->
<a href="/" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
