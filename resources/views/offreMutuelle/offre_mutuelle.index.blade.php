<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affiche la liste des offres de mutuelles disponibles</title>
</head>
<body>
    @foreach ($offre as $offre)

    <div>
     
        <h2>{{ $offre->nom }}</h2>

        <p>{{ $offre->description }}</p>
        
        <p>Prix: {{ $offre->prix }} €</p>


    </div>
        
    @endforeach
</body>
</html>