<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 Inicio</title>
</head>
<body>
    <h1>Ongietorri a la página de nuestros cursos. Listado.</h1>
</body>
</html>-->

/**************CON plantillas ***************/
@extends('layouts.plantilla')
<style>
    
</style>

@section('title', 'Listado de Cursos')

@section('content')
    <h1>Ongietorri a la página de nuestros cursos. Listado.</h1>
    <!--uso del componente-->
    <x-curso-card
        title="Curso de LAravel 11"
        description="Aprende Laravel 11 en éste segundo cuatrimestre"
        link="/cursos/1"
    />
    <x-curso-card 
        title="Curso de PHP Avanzado" 
        description="Domina PHP y lleva tus habilidades al siguiente nivel." 
        link="/cursos/2" 
    />
    <!-- Usar el componente Boton para redirigir a otra página -->
    <!--<x-boton texto="Ver más detalles" url="/cursos/1" type="button" />
    <x-boton texto="Ir a añadir curso" url="/cursos/create" type="button" />-->

    <!-- Usar el componente Boton -->
    <x-boton texto="Crear Curso" :url="route('cursos.create')" class="btn btn-success" />
    
@endsection
