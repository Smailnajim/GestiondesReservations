<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <head>
        <h1>client</h1>
        <nav>
            <a href="client/salles">salles</a>
            <a href="client/mySalles">My salles</a>
        </nav>
        @foreach ($salles as $salle)
        @if ()
        <div class="card" style="width: 18rem;">
        <img src="{{ $salle[''] }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $salle['name'] }}</h5>
                <p class="card-text">{{ $salle['description'] }}</p>
                <a href="/salle/detai/{{ $salle['id'] }}" class="btn btn-primary">more</a>
            </div>
        </div>
        @endforeach
    </head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>