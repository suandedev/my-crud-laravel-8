<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chair store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <h2>detail chair</h2>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">name : {{ $chair->name }}</h5>
            <p class="card-text">merk : {{ $chair->merk }}</p>
            <p class="card-text">stok : {{ $chair->stok }}</p>
            <a class="btn btn-primary" href="/chair">back</a>
        </div>
    </div>
</body>
</html>