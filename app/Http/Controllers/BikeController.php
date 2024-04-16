<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    // Autres méthodes du contrôleur...

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'type' => 'required|string',
            'size' => 'required|string',
            'material' => 'required|string',
            'status' => 'required|string',
            'price_per_hour' => 'required|numeric',
        ]);

        // Créer un nouveau vélo avec les données validées
        $bike = new Bike();
        $bike->type = $validatedData['type'];
        $bike->size = $validatedData['size'];
        $bike->material = $validatedData['material'];
        $bike->status = $validatedData['status'];
        $bike->price_per_hour = $validatedData['price_per_hour'];

        // Enregistrer le vélo dans la base de données
        $bike->save();

        // Rediriger l'utilisateur vers une page de confirmation ou de liste de vélos
        return redirect()->route('bikes.index')->with('success', 'Vélo ajouté avec succès.');
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
    // Récupérer tous les vélos depuis la base de données
    $bikes = Bike::all();

    // Passer les données à la vue correspondante et l'afficher
    return view('bikes.index', compact('bikes'));
}
}

