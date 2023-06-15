<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Http\Requests\ArchivoRequest;
use Illuminate\Http\Request;


class ArchivoController extends Controller
{

    public function index()
    {
        $items = Archivo::latest()->paginate(5);
        return view('archivo.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        //formulario donde agregamos datos a la base de datos
        
        return view('archivo.create');
    }


    public function store(ArchivoRequest $request)
    {
        //dd($request);
        $item = new Archivo;
        $item->Archivo = $request->Archivo;
        $item->TipoArchivo = $request->TipoArchivo;
        $item->URL = $request->url;

        $item->save();
        return redirect()->route('archivo.index')
        ->with('info', 'Archivo fue guardado');
    }


    public function show($item)
    {
        //dd($item);
        $items = Archivo::find($item);
        return view('archivo.show',compact('items'));
    }


    public function edit($id)
    {
        $item = Archivo::find($id);
        return view('archivo.edit', compact('item'));
    }


    public function update(ArchivoRequest $request, $id)
    {
        //dd($request);
        $item = Archivo::find($id);

        $item->Archivo = $request->Archivo;
        $item->TipoArchivo = $request->TipoArchivo;
        $item->URL = $request->url;

        $item->save();
        return redirect()->route('archivo.index')
        ->with('info', 'Archivo fue actualizado');
    }

    public function destroy($item)
    {
        $items = Archivo::find($item);
        $items->delete();

        return redirect()->route('archivo.index')->with('danger','Archivo fue Eliminado');
    }
}
