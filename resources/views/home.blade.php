<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container-card">
        @foreach ($movies as $movie)
            <div class="card">
                <h1>Titolo: {{$movie->title}}</h1>
                <h2>Titolo originale: {{$movie->original_title}}</h2>
                <h3>Nazionalità: {{$movie->nationality}}</h3>
                <h4>data di uscita: {{$movie->date}}</h4>
                <h5>Voto: {{$movie->vote}}</h5>
            </div>
        @endforeach
        
    </div>
</body>
</html>