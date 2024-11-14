<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('crud/css/infoClientes.css')}}">
    <title>Información Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="body">
    <header class="header">
           <a href="/cliente"><button class="button" type="button">Regresar</button></a>
    </header>
    <main class="main">
        <h2 class="h2">USUARIOS</h2>
        <section>
            <table class="table table-striped-columns">
                <thead class="thead">
                    <tr class="tr">
                      <th class="th" scope="col">ID</th>
                      <th class="th" scope="col">NOMBRE</th>
                      <th class="th" scope="col">APELLIDO</th>
                      <th class="th" scope="col">CEDULA</th>
                      <th class="th" scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                @foreach($getCliente as $getClientes)
                    <tr class="tr">
                    <th class="th" scope="row">{{$getClientes->id}}</th>
                    <td class="td">{{$getClientes->nombre}}</td>
                    <td class="td">{{$getClientes->apellido}}</td>
                    <td class="td">{{$getClientes->cedula}}</td>
                    <td>
                        <a class="a" href="/editarCli/{{$getClientes->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                        <form class="form" action="/eliminarCli/{{$getClientes->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="button" type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>