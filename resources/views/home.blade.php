<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center">My Movies:</h1>

    <div class="flex">
        @foreach ($moviesData as $movie)
        <div class="card">
            <h1>Titolo: {{$movie["title"]}}</h1>
            <p>Titolo originale: {{$movie["original_title"]}}</p>
            <p>Nazione: {{$movie["nationality"]}}</p>
            <p>Data d'uscita: {{$movie["date"]}}</p>
            <p>Voto: {{$movie["vote"]}}</p>
        </div>
        @endforeach
    </div>
</body>

</html>