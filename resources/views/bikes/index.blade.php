@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste des vélos</div>

                    <div class="card-body">
                        <a href="{{ route('bikes.create') }}" class="btn btn-primary mb-3">Ajouter un vélo</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Taille</th>
                                    <th scope="col">Matériau</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col">Prix par heure</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bikes as $bike)
                                    <tr>
                                        <td>{{ $bike->id }}</td>
                                        <td>{{ $bike->type }}</td>
                                        <td>{{ $bike->taille }}</td>
                                        <td>{{ $bike->materiau }}</td>
                                        <td>{{ $bike->statu }}</td>
                                        <td>{{ $bike->prix_par_heure }}</td>
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
