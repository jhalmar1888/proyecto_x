<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{

    public function index()
    {
        // pagina de inicio
        return view('archivo.index');
    }


    public function create()
    {
        //formulario donde agregamos datos a la base de datos
        return view('archivo.create');
    }


    public function store(Request $request)
    {
        //sirve para guardar datos en la base de datos
    }


    public function show(Archivo $archivo)
    {
        //visualizar un registro de nuestra tabla
    }


    public function edit(Archivo $archivo)
    {
        //nos sirve para traer datos que se editaran
        //y se los coloca en un formulario
    }

    public function update(Request $request, Archivo $archivo)
    {
        //Actualiza los datos en la base de datos
    }


    public function destroy(Archivo $archivo)
    {
        //elimina un registro de nuestra tabla
    }
}
