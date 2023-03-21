@extends("layouts.master")
@section("title", "Administración de productos")
@section("header", "Administración de productos")
@section("content")
    <a href="{{route('product.create')}}"><button class="btn btn-primary" type="submit">Nuevo</button></a>
    <table class="table table-dark table-hover mt-2" style="text-align: center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col" colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr @foreach ($productList as $product)>
                <td><input type="hidden" value="{{$product->id}}" name="id">{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td><a href="{{route('product.show', $product->id)}}"><button class="btn btn-success" type="submit">Ver producto</button></a></td>
                <td><a href="{{route('product.edit', $product->id)}}"><button class="btn btn-warning" type="submit">Modificar</button></a></td>
                <td><form action="{{route('product.destroy', $product->id)}}" method="post">@csrf @method("DELETE")<button class="btn btn-danger" type="submit">Eliminar</button>
                </form></td>
            </tr @endforeach>
        </tbody>
    </table>
@endsection