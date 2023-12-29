<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informations d'identité</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style pour les cards */
        .person-card {
            height: 150px; /* Hauteur souhaitée pour toutes les cards */
        }
        .img {
            width: 5em;
            height: 5em;
            border-radius: 10vh;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <div class="col-md-6 offset-md-3">
            <!-- Bouton de retour -->
            <a href="{{ route('back.getanimateur') }}" class="btn btn-primary mb-3">
                <i class="bi bi-arrow-left"></i> Retour
            </a>
        </div>
        <h2 style="text-align: center" >LISTE DES ANIMATEURS</h2>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach($animateursParParoisse as $animateur)
                <div class="col">
                    <div class="card h-100 person-card">
                        <div class="card-body d-flex align-items-center">
                            <!-- Photo -->
                            <img class="img me-3" src="{{ asset('storage/'.$animateur->photo) }}" alt="Photo de la personne">
                            <!-- Informations personnelles -->
                            <div>
                                <h5>{{ $animateur->nom }} {{ $animateur->prenom }}</h5>
                                <p><em>{{ $animateur->poste }} </em></p>
                                <p>{{ $animateur->contact }} - {{ $animateur->email }}</p>
                                <p>Année Pastorale - {{ $animateur->annee_pastorale }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
