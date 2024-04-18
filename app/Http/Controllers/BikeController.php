<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    // Autres méthodes du contrôleur...

    public function store(Request $request)
    {
        try {
            // Valider les données du formulaire
            $request->validate([
                'type' => 'required',
                'taille' => 'required',
                'materiau' => 'required',
                'statu' => 'required',
                'prix_par_heure' => 'required|numeric',
            ]);
    
            // Créer une nouvelle instance de vélo avec les données du formulaire
            $bike = new Bike();
            $bike->type = $request->type;
            $bike->taille = $request->taille;
            $bike->materiau = $request->materiau;
            $bike->statu = $request->statu;
            $bike->prix_par_heure = $request->prix_par_heure;
            
            // Enregistrer le vélo dans la base de données
            $bike->save();
    
            // Rediriger avec un message de succès
            return redirect()->route('bikes.index')->with('success', 'Vélo ajouté avec succès');
        } catch (\Exception $e) {
            // En cas d'erreur, afficher le message d'erreur et rediriger avec les données du formulaire
            return back()->withError($e->getMessage())->withInput();
        }
    }
    
    public function create()
    {
        // Récupérer tous les vélos depuis la base de données
        $bikes = Bike::all();
        
        // Passer les données des vélos à la vue du formulaire
        return view('bikes.create', ['bikes' => $bikes]);
    }
    
    public function index()
    {
        // Activer le débogage des requêtes SQL
        \DB::enableQueryLog();
    
        // Récupérer tous les vélos depuis la base de données
        $bikes = Bike::all();
    
        // Afficher les requêtes SQL exécutées
        //dd(\DB::getQueryLog());
    
        // Passer les données à la vue correspondante et l'afficher
        return view('bikes.index', compact('bikes'));
    }
    
}
