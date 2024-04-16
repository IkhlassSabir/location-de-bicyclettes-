@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste des vélos</div>

                    <div class="card-body">
                        <!-- Bouton pour créer un nouveau vélo -->
                        <a href="{{ route('bikes.create') }}" class="btn btn-primary mb-3">Ajouter un vélo</a>

                        <!-- Tableau pour afficher les vélos -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Taille</th>
                                    <th scope="col">Matériau</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col">Prix par heure</th>
                                    <!-- Ajoutez d'autres colonnes si nécessaire -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bikes as $bike)
                                    <tr>
                                        <td>{{ $bike->id }}</td>
                                        <td>{{ $bike->type }}</td>
                                        <td>{{ $bike->size }}</td>
                                        <td>{{ $bike->material }}</td>
                                        <td>{{ $bike->status }}</td>
                                        <td>{{ $bike->price_per_hour }}</td>
                                        <!-- Ajoutez d'autres colonnes si nécessaire -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
