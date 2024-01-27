<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Add page</h1>

        <form action="{{ route('product.edit') }}" method="post" >
            @csrf 
            
            <label for="libelle" class="form-label">Libelle</label>
            <input type="text" name="libelle" class="form-control" ><br>

            <label for="marque" class="form-label">Marque</label>
            <input type="text" name="marque" class="form-control" ><br>

            <label for="prix" class="form-label">Prix</label>
            <input type="text" name="prix" class="form-control" ><br>

            <label for="stock" class="form-label">Stock</label>
            <input type="text" name="stock" class="form-control" ><br>

            <button type="submit" class="btn btn-warning">edit</button>
            <a href="/product" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
