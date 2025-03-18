{{-- Dos formas para pasar componentes --}}

{{-- los components se encuentran en resources/views/components --}}
{{-- @component('components.layout')
<h1>Hola Freen sarocha</h1>
@endcomponent --}}

{{-- segunda forma --}}
{{-- sintaxis: <x- {nombre del componente}> </x-> --}}

{{-- TAMBIEN PODEMOS UTILIZAR LA NAVIGATION COMO UN COMPONENT --}}
{{-- <x-navigation2></x-navigation2> --}}

{{-- como no hay nada dentro del componente
podemos cerrar directamente --}}
{{-- <x-navigation2/> --}}


{{-- le pasamos la variable del titulo, meta-title --}}
<x-layout meta-title="home">
    <h1>Hola Freen Sarocha</h1>
</x-layout>
    
