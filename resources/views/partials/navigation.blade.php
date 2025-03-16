    {{-- Forma acediendo direntamente a la url q se asigno --}}
    {{-- <li><a href="/">Home</a></li> --}}
    <nav>
        <ul>
            {{-- Para hacer referencia al nombre de la ruta --}}
            {{-- Forma 1: Utilizando php plano --}}
            {{-- <li><a href="<?=route('contact') ?>">Contacto</a></li> --}}
            {{-- Utilizando Blade es para proteccion--}}
            <li><a href="{{route('contact') }}">Contacto</a></li>
            <li><a href="{{route('welcome') }}">Home</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('about') }}">Nosotros</a></li>
        </ul>
    </nav>
