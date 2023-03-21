<div class="container-fluid">
    @extends("layouts.master")
    @section("title", "Administración de productos")
    @section("header", "Administración de productos")
    @section("content")

    <div class="d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-body">
                <p><b>ID:</b> {{$product->id}}</p>
                <p><b>Nombre:</b> {{$product->name}}</p>
                <p><b>Descripción:</b> {{$product->description}}</p>
                <p><b>Precio:</b> {{$product->price}}</p>
            </div>
        </div>
    </div>
    @endsection
</div>