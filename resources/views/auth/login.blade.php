@extends('layouts.app')
<style>
    .card {
        border-radius: 13px !important;
        border: none !important;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.19) !important;
    }
</style>
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <div class="container-xxl">
                <div class="authentication-wrapper authentication-basic container-p-y">
                    <div class="authentication-inner py-4">
                        <!-- Login -->
                        <div class="card aut">
                            <div class="card-body">
                                <!-- Logo -->
                                <div class="app-brand justify-content-center mb-4 mt-2">
                                    <a href="index.html" class="app-brand-link gap-2">
                                        <span class="app-brand-logo demo">
                                            <img src="" alt="">
                                        </span>
                                    </a>
                                </div>
                                <!-- /Logo -->

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Input -->
                                    <div>
                                        <label for="email">Email</label>
                                        <input
                                            class="form-control"
                                            id="email"
                                            placeholder="agossoujule@gmail.com"
                                            type="email"
                                            name="email"
                                            required
                                            autofocus>
                                    </div> <br><br>

                                    <!-- Password Input -->
                                    <div>

                                        <div class="d-flex justify-content-between">
                                            <label for="password">Mot de passe</label>
                                            <a href="{{ route('passwords.request') }}">
                                                <small>Mot de passe oublié ?</small>
                                            </a>
                                        </div>

                                        <input
                                            class="form-control"
                                            id="password"
                                            placeholder="********"
                                            type="password"
                                            name="password"
                                            required>
                                    </div> <br>

                                    <!-- Remember Me Checkbox -->
                                    <div>
                                        <label for="remember">
                                            <input type="checkbox"
                                                id="remember"
                                                name="remember"> Se souvenir de moi
                                        </label>
                                    </div> <br>

                                    <!-- Submit Button -->
                                    <div>
                                        <button class="btn btn-primary d-grid w-100" type="submit">Se connecter</button>
                                    </div>
                                </form>

                                <p class="text-center">
                                    
                                    <a href="{{ route('register') }}">
                                        <span>Créer un compte</span>
                                    </a>
                                </p>

                            </div>
                        </div>
                        <!-- /Login -->
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>






@endsection