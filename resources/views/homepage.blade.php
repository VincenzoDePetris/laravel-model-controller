<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  <div class="d-flex flex-wrap justify-content-between">
    @foreach ($movies as $movie)
      <div class="card">

        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <p>Titolo Originale: <b>{{$movie->original_title}}</b></p>
          <p>Nazionalità: <b>{{$movie->nationality}}</b></p>
          <p>Data di uscita: <b>{{$movie->date}}</b></p>
          <p>Voto: <b>{{$movie->vote}}</b></p>
        </div>
      </div>
    @endforeach
  </div>
</body>

</html>
