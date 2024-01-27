<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>page show</h1>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$product->libelle}}</h4>
            <h6 class="card-subtitle text-muted">{{$item->marque}}</h6>
        </div>
        <img src="{{asset('storage'.$product->image)}}" alt="" width="200" height="200px"/>
        <div class="card-body">
            <p class="card-text">{{$product->libelle}}</p>
            <a href="{{route('product.index')}}" class="card-link">Home</a>
        </div>
    </div>
    
</body>
</html>