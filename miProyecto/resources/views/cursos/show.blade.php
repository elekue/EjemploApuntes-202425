<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel11 - Mostrar curso</title>
</head>
<body>
    <h1>Este es el curso <?php echo $curso?> </h1>

    <h1>Este es el curso <?=  $curso?> </h1>
    
    <h1>Este es el curso {{ $curso }} </h1>
</body>
</html>-->

/*****************plantilla***********/
@extends('layouts.plantilla')

@section('title', "Mostrar Curso: $curso")

@section('content')
    <h1>Este es el curso {{ $curso }}</h1>
@endsection
