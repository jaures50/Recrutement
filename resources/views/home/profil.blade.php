@extends('layouts.app')

@section('content')

<section class="container my-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <h2>Remplissez vos informations</h2>
                <form>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Votre e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="photo">Télécharger une photo</label> <br>
                        <input type="file" class="form-control" id="photo" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="niveauEtude">Niveau d'Étude</label>
                        <input type="text" class="form-control" id="niveauEtude" placeholder="Votre niveau d'étude" required>
                    </div>
                    <div class="form-group">
                        <label for="anneesExperience">Années d'Expérience</label>
                        <input type="number" class="form-control" id="anneesExperience" placeholder="Nombre d'années d'expérience" required>
                    </div>
                    <div class="form-group">
                        <label for="interets">Intérêts</label>
                        <textarea class="form-control" id="interets" rows="3" placeholder="Vos intérêts"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="experiences">Expériences Professionnelles ou Académiques</label>
                        <textarea class="form-control" id="experiences" rows="3" placeholder="Détaillez vos expériences"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="portfolio">Liens vers votre Portfolio</label>
                        <input type="text" class="form-control" id="portfolio" placeholder="URL de votre portfolio">
                    </div>
                    <button type="submit" class="btn btn-primary">Créer mon profil</button>
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</section>

@endsection