<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <nav class="navbar bg-success mb-5">
                <div class="container-fluid d-flex justify-content-center align-items-center">
                    <h1 class="mb-0">Productos</h1>
                </div>
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>