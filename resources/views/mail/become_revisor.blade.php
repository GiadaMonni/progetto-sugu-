<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sugu.it</title>
</head>
<body>
    <div>
        <h2>UN UTENTE HA RICHIESTO DI LAVORARE CON NOI</h2>
        <H4>Ecco i suoi dati: </H4>
        <p> Nome: {{$user->name}}</p>
        <p> Email: {{$user->email}}</p>
        <p>Per renderlo revisore clicca qui:</p>
        <a href="{{route('make.revisor',compact('user'))}}"> Rendi revisore</a>
    </div>
</body>
</html>