<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Bike Rental</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .jumbotron {
            background-color: #343a40;
            color: #ffffff;
            padding: 2rem 1rem;
            border-radius: 0.25rem;
        }
        .jumbotron h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }
        .jumbotron p {
            font-size: 1.25rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="jumbotron text-center">
                        <h1 class="display-4">Bienvenue sur Location de Bicyclettes</h1>
                        <p class="lead">Découvrez notre gamme de vélos et trouvez celui qui vous convient.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Connexion</a>
                        <a href="{{ route('bikes.create') }}" class="btn btn-primary">Ajouter un vélo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
