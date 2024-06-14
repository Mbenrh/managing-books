<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Auteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LivreController extends Controller
{
    public function AjoutLivreAuteur()
    {
        $auteur1 = Auteur::create(['nom' => 'Ali', 'date_naissance' => '1970-02-12', 'nationalite' => 'Tunisienne']);
        $auteur2 = Auteur::create(['nom' => 'Fatima', 'date_naissance' => '1980-04-12', 'nationalite' => 'Algerienne']);
        $auteur3 = Auteur::create(['nom' => 'Sami', 'date_naissance' => '1960-01-20', 'nationalite' => 'Marocaine']);
        //dd($auteur1);
        $livre1 = Livre::create(['titre' => 'titre1', 'description' => 'description 1', 'nombre_pages' => '80', 'auteur_id' => $auteur1->id]);
        $livre2 = Livre::create(['titre' => 'titre2', 'description' => 'description 2', 'nombre_pages' => '120', 'auteur_id' => $auteur2->id]);
        $livre3 = Livre::create(['titre' => 'titre3', 'description' => 'description 3', 'nombre_pages' => '50', 'auteur_id' => $auteur3->id]);
        $livre4 = Livre::create(['titre' => 'titre4', 'description' => 'description 4', 'nombre_pages' => '20', 'auteur_id' => $auteur1->id]);
        $livre5 = Livre::create(['titre' => 'titre5', 'description' => 'description 5', 'nombre_pages' => '220', 'auteur_id' => $auteur3->id]);
    }
    public function afficheLivresParAuteur($id)
    {
        $auteur = Auteur::find($id);
        $livres = $auteur->livres()->get();

        if ($auteur) {
            return view('affiche', ['livres' => $livres]);
        } else {
            echo ("auteur inexistant");
        }
    }
}
