@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter un vélo</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('bikes.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input id="type" type="text" class="form-control" name="type" required>
                            </div>
                            <div class="form-group">
                                <label for="taille">Taille</label>
                                <input id="taille" type="text" class="form-control" name="taille" required>
                            </div>
                            <div class="form-group">
                                <label for="materiau">Matériau</label>
                                <input id="materiau" type="text" class="form-control" name="materiau" required>
                            </div>
                            <div class="form-group">
                                <label for="statu">Statut</label>
                                <input id="statu" type="text" class="form-control" name="statu" required>
                            </div>
                            <div class="form-group">
                                <label for="prix_par_heure">Prix par heure</label>
                                <input id="prix_par_heure" type="text" class="form-control" name="prix_par_heure" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ajouter vélo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
