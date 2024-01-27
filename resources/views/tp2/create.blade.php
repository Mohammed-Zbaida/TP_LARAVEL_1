<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>page ajouter produit</h1>
    <form action="{{route("product.store")}}" method="POST">
        @csrf
        <label for="">libelle</label>
        <input type="text" name="libelle" ><br>
        @error('libelle')
            <p>{{$message}}</p>
        @enderror
        <label for="">marque</label>
        <input type="text" name="marque" ><br>
        @error('marque')
            <p>{{$message}}</p>
        @enderror
        <label for="">prix</label>
        <input type="text" name="prix" ><br>
        @error('prix"')
            <p>{{$message}}</p>
        @enderror
        <label for="">stock</label>
        <input type="text" name="stock"><br>
        @error('stock')
            <p>{{$message}}</p>
        @enderror
        <label for="">image</label>
        <input type="file" name="image">
        @error('image')
            <p>{{$message}}</p>
        @enderror
        <button type="submit">ajouter</button>
    </form>
    
</body>
</html>