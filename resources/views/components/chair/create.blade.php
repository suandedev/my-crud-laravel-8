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

    <h2>add chair</h2>
    <form action="store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="name ..">
        </div>
        <div class="mb-3">
            <label for="merk" class="form-label">merk</label>
            <input name="merk" type="text" class="form-control" id="merk" placeholder="merk ..">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">stok</label>
            <input name="stok" type="number" class="form-control" id="stok" placeholder="stok ..">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">save</button>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>