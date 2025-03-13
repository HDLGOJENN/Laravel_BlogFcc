<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    {{-- <h1>PROFE CONDE = SABIDURIA</h1> --}}

    {{-- Forma acediendo direntamente a la url q se asigno --}}
    {{-- <li><a href="/">Home</a></li> --}}


    <ul>
        {{-- Para hacer referencia al nombre de la ruta --}}
        {{-- Forma 1: Utilizando php plano --}}
        <li><a href="<?=route('contact') ?>">Contacto</a></li>
        <li><a href="<?=route('welcome') ?>">Home</a></li>
        <li><a href="<?=route('blog') ?>"">Blog</a></li>
        <li><a href="<?=route('about') ?>">Nosotros</a></li>
    </ul>
</body>
</html>