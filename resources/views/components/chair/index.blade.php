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

    <h2>chair store</h2>
    <a class="btn btn-primary" href="chair/create">add</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">merk</th>
                <th scope="col">stok</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chairs as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->merk }}</td>
                <td>{{ $item->stok }}</td>
                <td>
                    <a class="btn btn-sm btn-secondary" href="chair/{{ $item->id }}/show">show</a>
                    <a class="btn btn-sm btn-warning" href="chair/{{ $item->id }}/edit">edit</a>
                    <form action="chair/{{ $item->id }}/delete" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>