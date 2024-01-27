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
        <h1>page home</h1>
    <a href="{{route('product.index')}}">create</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Libelle</th>
                <th>Marque</th>
                <th>Prix</th>
                <th>stock</th>
                <th>image</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($product as $el)
        <tr>
            <td>{{$el['Libelle']}}</td>
            <td>{{$el['Marque']}}</td>
            <td>{{$el['Prix']}}</td>
            <td>{{$el['Stock']}}</td>
            <td>
                <img src="{{$el['Image']}}" alt="product img" class="">
            </td>
            <td>
                <a href="/product/Edit"class="btn btn-primary">modifier</a>
                <a href="/product/Show" class="btn btn-secondary">details</a>
                <button class="btn btn-danger">supprimer</button>
            </td>
        </tr>
        
        @endforeach

        </tbody>
    </table>
    </div>

    
</body>
</html>