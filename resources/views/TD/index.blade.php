<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
</head>

<body>

    @foreach($datos as $dato)
    <div>
        <span>Nombre: {{ $dato->nombre }}</span>
        <span>Descripción: {{ $dato->descripcion }}</span>
    </div>
    @endforeach

</body>

</html>