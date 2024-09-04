<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affiche les demandes de support de l'utilisateur</title>
</head>
<body>
    @foreach($supports as $support)
    <div>
        <p>Message : {{ $support->message }}</p>
        <p>Réponse : {{ $support->reponse }}</p>
        <p>Date : {{ $support->date }}</p>
    </div>
@endforeach
</body>
</html>