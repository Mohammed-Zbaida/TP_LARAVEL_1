<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>page index</h1>
    <button><a href="{{route('product.create')}}">create</a></button>
    <div
        class="alert alert-sucess"
        role="alert"
    >
        <h4 class="alert-heading">Alert sucess</h4>
        @if (session()->has('success'))
        <p>{{session('success')}}</p> 
        @endif
        <hr />
    </div>
    
    
    <table>
        <thead>
            <tr>
                <th>libelle</th>
                <th>marque</th>
                <th>prix</th>
                <th>stock</th>
                <th>image</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <td>{{$item->libelle}}</td>
                <td>{{$item->marque}}</td>
                <td>{{$item->prix}}</td>
                <td>{{$item->stock}}</td>
                <td>
                    <img src="{{asset('storage'.$item->image)}}" alt="" width="200px" height="300px">
                </td>
                <td>
                    <a href="{{route('product.show',$item->id)}}">detail</a>
                    <form action="{{route('product.destroy',$product->id)}}">
                        @method('DELETE')
                        @csrf
                        <button>delete</button>
                    </form>
                    <form action="{{route('product.edit')}}">
                        {{-- @method('PUT') --}}
                        @csrf
                        <button>modifier</button>
                    </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>