<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>

    {{-- Vamos a usar un include de php usando las directivas de blade --}}
    {{-- pasamos la direccion de las vistas/ direccion del archivo que queremos incluir --}}
    @include('partials.navigation')
    <h1>Hola Freen sarocha</h1>
</body>
</html>