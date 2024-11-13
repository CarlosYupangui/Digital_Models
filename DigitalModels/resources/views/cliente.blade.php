<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Cliente</title>
</head>
<body>
    <a href="/infoCliente"><button type="button">Información</button></a>
    <form action="/guardar_info_Cli" method="post">
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>

        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" id="apellido"><br>

        <label for="cedula">Cédula</label><br>
        <input type="text" name="cedula" id="cedula">
        <hr>
        <button type="submit">Guardar Datos</button>
    </form>

</body>
</html>