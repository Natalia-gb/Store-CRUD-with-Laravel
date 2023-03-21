@extends("layouts.master")
@section("title", "Inserción de productos")
@section("header", "Inserción de productos")
@section("content")
    @isset($product)
        <form action="{{route('product.update', ['product' => $product->id])}}" method="post">
            @csrf
            @method("PATCH")
            <div class="d-block justify-content-center align-items-center">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">ID</span>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{$product->id}}" name="id">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{$product->name}}" name="name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Description</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{$product->description}}" name="description">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Price</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{$product->price}}" name="price">
                </div>
            </div> 
            <input type="hidden" name="id" value="{{$product->id}}"><button class="btn btn-primary" type="submit">Guardar cambios</button>
        </form>
    @else
        <form action="{{route('product.store')}}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre del producto</span>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="name" value="{{$product->name ?? ''}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Descripción del producto</span>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="description" value="{{$product->description ?? ''}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Precio del producto</span>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="price" value="{{$product->price ?? ''}}">
            </div>
            <button class="btn btn-success" type="submit">Crear producto</button>
        </form>
    @endif
@endsection