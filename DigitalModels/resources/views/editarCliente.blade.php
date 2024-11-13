<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="/actualizarInfoCli/{{$editCliente->id}}" method="post">
        @csrf
        @method('put')
        <label for="nombre">Nombre</label><br>
        <input value="{{$editCliente->nombre}}" type="text" name="nombre" id="nombre"><br>

        <label for="apellido">Apellido</label><br>
        <input value="{{$editCliente->apellido}}" type="text" name="apellido" id="apellido"><br>
        
        <label for="cedula">Cédula</label><br>
        <input value="{{$editCliente->cedula}}" type="text" name="cedula" id="cedula">

        <hr>
        <button type="submit">Actualizar Datos</button>
    </form>

</body>
</html>