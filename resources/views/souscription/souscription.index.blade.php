<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affiche l'historique des souscriptions d'un utilisateur</title>
</head>
<body>
    @foreach($souscriptions as $souscription)
    <div>
        <h3>Offre : {{ $souscription->offreMutuelle->nom }}</h3>
        <p>Date de souscription : {{ $souscription->date_souscription }}</p>
    </div>
@endforeach

</body>
</html>