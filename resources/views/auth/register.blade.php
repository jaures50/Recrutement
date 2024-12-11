@extends('layouts.app')

<style>
    .card {
        border-radius: 13px !important;
        border: none !important;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.19) !important;
    }
</style>

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf <br>
                        <div>
                            <label for="name">Nom :</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-control"
                                autofocus
                                required>
                        </div> <br>
                        <div>
                            <label for="email">Email :</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                autofocus
                                required>
                        </div> <br>
                        <div>
                            <label for="password">Mot de passe :</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control"
                                autofocus
                                required>
                        </div> <br>
                        <div>
                            <label for="password_confirmation">Confirmation :</label>
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                class="form-control"
                                autofocus
                                required>
                        </div> <br>

                        <!-- <button class="btn btn-primary" style="border-radius: 5px;" type="submit">S'inscrire</button>
                        <a href="{{route('login')}}"> Vous avez déjà de compte ? </a>
 -->
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary" style="border-radius: 5px;" type="submit">S'inscrire</button>
                            <a href="{{route('login')}}"> Vous avez déjà de compte ? </a>

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection