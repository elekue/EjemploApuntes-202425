<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;


class CursoController extends Controller
{
    /*public function index(){
        return "Cursos disponibles para la clase de 2DW3";
    }*/

    /*public function  index(){
        return view('welcome');
    }*/

    public function index(){
        //dd('El método index está funcionando');
        return view('cursos.index');
    }
    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show', compact('curso'));
    }
    public function store(Request $request)
{
    // Validar los datos del formulario
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
    ]);

    // Crear un nuevo curso en la base de datos (esto es solo un ejemplo)
    Curso::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
    ]);

    // Redirigir o hacer algo después de guardar el curso
    return redirect()->route('cursos.index'); // Por ejemplo, redirigir al listado de cursos
}
}
