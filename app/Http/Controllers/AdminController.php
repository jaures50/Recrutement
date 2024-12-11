<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Méthode pour l'index de l'admin
    public function index()
    {
        // Vous pouvez récupérer des données ou effectuer d'autres actions ici
        return view('admin.dashboard'); // Remplacez 'admin.dashboard' par la vue que vous souhaitez utiliser
    }
}
