<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruteurController extends Controller
{
    // Méthode pour l'index du recruteur
    public function index()
    {
        // Vous pouvez récupérer des données ou effectuer d'autres actions ici
        return view('recruteur.dashboard'); // Remplacez 'recruteur.dashboard' par la vue que vous souhaitez utiliser
    }
}
