<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 Añadir Curso</title>
</head>
<body>
    <h1>Ongietorri a la página para añadir curso</h1>
</body>
</html>-->

/**************plantillarekin***************/
@extends('layouts.plantilla')

@section('title', 'Añadir Curso')

@section('content')
    <h1>Ongietorri a la página para añadir curso</h1>
    <!--Uso del componente alerta-->
    
    <x-alerta>
        <!--<x-slot name="title">
            Alert Create
        </x-slot>-->
        Se procede a la creación de un nuevo curso
    </x-alerta>
@endsection
