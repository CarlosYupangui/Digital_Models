<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('crud/css/editCliente.css')}}">
    <title>Editar Cliente</title>
</head>
<body class="body">
    <header class="header">
           <a href="/cliente"><button class="button" type="button">Regresar</button></a>
    </header>
    <main class="main">
    <h2 class="h2">Editar Cliente</h2>
    <form class="form" action="/actualizarInfoCli/{{$editCliente->id}}" method="post">
        @csrf
        @method('put')
        <label class="label" for="NOMBRE">NOMBRE</label><br>
        <input class="input" value="{{$editCliente->nombre}}" type="text" name="NOMBRE" id="nombre"><br><br>
        <label class="label" for="APELLIDO">APELLIDO</label><br>
        <input class="input" value="{{$editCliente->apellido}}" type="text" name="APELLIDO" id="APELLIDO"><br>
        <label class="label" for="CEDULA">CÉDULA</label><br>
        <input class="input" value="{{$editCliente->cedula}}" type="number" name="cedula" id="CEDULA" min="0" step="1" placeholder="Ingrese solo números" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        <br><br>
        <button class="button" type="submit">Actualizar Datos</button>
    </form>
    </main>

</body>
</html>