<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $liste_etudiants = Etudiant::orderby('nom', 'asc')->paginate(5);
        return view('etudiant', compact('liste_etudiants'));
    }
    
    public function create(){
        $liste_etudiants = Etudiant::orderby('nom', 'asc')->paginate(5);
        return view('createEtudiant', compact('liste_etudiants'));
    }

    public function welcome(){
        return view('welcome');
    }
}
