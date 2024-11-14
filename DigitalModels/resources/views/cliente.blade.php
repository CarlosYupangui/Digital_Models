<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('crud/css/cliente.css')}}">
    <title>Ingresar Cliente</title>
</head>
<body class= "body">
    <header>
          <a href="/infoCliente"><button type="button">Información</button></a>
            
    </header>
    <main>
        <h2>Ingrese Nuevo Usuario</h2>
        <section>
        <form action="/guardar_info_Cli" method="post">
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>

        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" id="apellido"><br>

        <label for="cedula">Cédula</label><br>
        <input type="text" name="cedula" id="cedula">
        <br>
        </section><br>
        <button type="submit">Guardar Datos</button>
    </form>
    </main>
</body>
</html>