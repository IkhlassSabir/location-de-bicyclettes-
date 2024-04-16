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

                            <!-- Champs pour ajouter un nouveau vélo -->
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input id="type" type="text" class="form-control" name="type" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="size">Taille</label>
                                <input id="size" type="text" class="form-control" name="size" required>
                            </div>

                            <div class="form-group">
                                <label for="material">Matériau</label>
                                <input id="material" type="text" class="form-control" name="material" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Statut</label>
                                <input id="status" type="text" class="form-control" name="status" required>
                            </div>

                            <div class="form-group">
                                <label for="price_per_hour">Prix par heure</label>
                                <input id="price_per_hour" type="text" class="form-control" name="price_per_hour" required>
                            </div>

                            <!-- Sélection d'un vélo existant -->
                            <div class="form-group">
                                <label for="existing_bikes">Vélos existants :</label>
                                <select id="existing_bikes" class="form-control" name="existing_bikes">
                                    <option value="">Sélectionnez un vélo existant</option>
                                    @foreach($bikes as $bike)
                                        <option value="{{ $bike->id }}">{{ $bike->type }} - {{ $bike->size }}</option>
                                    @endforeach
                                </select>
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
