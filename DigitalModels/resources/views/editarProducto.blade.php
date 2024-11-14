<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('crud/css/editarPro.css')}}">
    <title>Editar Producto</title>
</head>
<body  class="body">
    <header class="header">
           <a href="/cliente"><button class="button" type="button">Regresar</button></a>
    </header>
    <main>
        <h2  class="h2">Editar Producto</h2>
        <form action="/actualizarInfoPro/{{$editProducto->id}}" method="post">
            @csrf
            @method('put')
            <label class="label" for="nombreProductos">Producto</label><br>
            <input class="input" value="{{$editProducto->nombreProductos}}" type="text" name="nombreProductos" id="nombreProductos"><br>
    
            <label class="label" for="descripcion">Descripción</label><br>
            <input class="input" value="{{$editProducto->descripcion}}" type="text" name="descripcion" id="descripcion"><br>
            
            <label class="label" for="precio">Precio</label><br>
            <input class="input" value="{{$editProducto->precio}}" type="text" name="precio" id="precio">
    
            <hr>
            <button class="button" type="submit">Actualizar Producto</button>
        </form>
    </main>
</body>
</html>