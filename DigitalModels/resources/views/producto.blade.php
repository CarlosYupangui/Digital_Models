<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Producto</title>
    <link rel="stylesheet" href="{{asset('crud/css/producto.css')}}">
</head>
<body class = "body">
    <header class= "header">
        <a class = "a" href="/infoProducto"><button type="button">Información</button></a><br>
    </header>
    <main class = "main">
    <h2 class="h2">Productos</h2>
    <section class="section">
        <form class = "form" action="/guardar_info_Pro" method="post">
            @csrf
            <label class = "label" for="nombreProductos">Nombre Producto</label><br>
            <input class = "input" type="text" name="nombreProductos" id="nombreProductos"><br>
    
            <label class = "label" for="descripcion">Descripción</label><br>
            <input class = "input" type="text" name="descripcion" id="descripcion"><br>
    
            <label class = "label" for="precio">Precio</label><br>
            <input class = "input" type="text" name="precio" id="precio">
            <hr>
            <button class = "button" type="submit">Guardar Producto</button>
        </form>
    </section>
    </main>
    
</body>
</html>