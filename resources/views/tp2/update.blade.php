<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>modifier page</h1>
    <form action="{{route('product.update')}}">
        @method('PUT')
        @csrf
        <label for="">libelle</label>
        <input type="text" name="libelle" value="{{$product->libelle}}"><br>
        <label for="">marque</label>
        <input type="text" name="marque" value="{{$product->marque}}"><br>
        <label for="">prix</label>
        <input type="text" name="prix" value="{{$product->prix}}"><br>
        <label for="">stock</label>
        <input type="text" name="stock" value="{{old('stock',$product->stock)}}"><br>
        <button type="submit">modifier</button>
    </form>
</body>
</html>