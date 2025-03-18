{{-- COMPONENTES DE BLADE --}}
{{-- SON PLANTILLAS REUTILIZABLES --}}
<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- definimos la variable metaTitle q le vamos a pasar, es obligatorio llamarla asi --}}
    <title>{{$metaTitle ?? 'default'}}</title>
</head>
<body>

    {{-- Vamos a usar un include de php usando las directivas de blade --}}
    {{-- pasamos la direccion de las vistas/ direccion del archivo que queremos incluir --}}
    @include('partials.navigation')

    {{-- variable reservada --}}
    {{$slot}}

</body>
</html>