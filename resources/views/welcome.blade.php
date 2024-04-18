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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Bike Rental</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bikes.create') }}">Ajouter un vélo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="jumbotron text-center">
                        <h1 class="display-4">Bienvenue sur Location de Bicyclettes</h1>
                        <p class="lead">Découvrez notre gamme de vélos et trouvez celui qui vous convient.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Images -->
    <div class="row mt-5">
        <div class="col-md-4">
            <img src="Images/image1.jpg" class="img-fluid" alt="Image1">
        </div>
        <div class="col-md-4">
            <img src="Images/image2.jpg" class="img-fluid" alt="Image 2">
        </div>
        <div class="col-md-4">
            <img src="Images/image3.jpg" class="img-fluid" alt="Image 3">
        </div>
        <div class="col-md-4">
            <img src="Images/image4.jpg" class="img-fluid" alt="Image 4">
        </div>
        <div class="col-md-4">
            <img src="Images/image5.jpg" class="img-fluid" alt="Image 5">
        </div>
        <div class="col-md-4">
            <img src="Images/image6.jpg" class="img-fluid" alt="Image 6">
        </div>
        <div class="col-md-4">
            <img src="Images/image7.jpg" class="img-fluid" alt="Image 7">
        </div>
        <div class="col-md-4">
            <img src="Images/image8.jpg" class="img-fluid" alt="Image 8">
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
