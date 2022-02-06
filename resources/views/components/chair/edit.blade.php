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

    <h2>edit store</h2>
    <form action="update" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name" class="form-label">name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="name .."
            value="{{ $chair->name }}">
        </div>
        
        <div class="form-group">
            <label for="merk" class="form-label">merk</label>
            <input name="merk" type="text" class="form-control" id="merk" placeholder="merk .."
            value="{{ $chair->merk }}">
        </div>
        
        <div class="form-group">
            <label for="stok" class="form-label">stok</label>
            <input name="stok" type="text" class="form-control" id="stok" placeholder="stok .."
            value="{{ $chair->stok }}">
        </div>
        <button class="btn btn-primary" type="submit">save update</button>
    </form>

</body>
</html>