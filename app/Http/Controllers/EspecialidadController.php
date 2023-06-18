<?php

namespace App\Http\Controllers;
use App\Models\Especialidad;
use App\Http\Requests\EspecialidadRequest;
use Illuminate\Http\Request;
class EspecialidadController extends Controller
{
    public function index()
    {
        $items = Especialidad::latest()->paginate(5);
        return view('especialidad.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Especialidad::find($item);
        return view('especialidad.show',compact('items'));
    }

    public function create()
    {
        return view('especialidad.create');
    }


    public function store(EspecialidadRequest $request)
    {
        //dd($request);
        $item = new Especialidad;
        $item->Num = $request->Num;
        $item->Especialidad = $request->Especialidad;

        $item->save();
        return redirect()->route('Especialidad.index')
        ->with('info', 'la Especialidad fue guardado');
    }

    public function edit($id)
    {
        $item = Especialidad::find($id);
        return view('Especialidad.edit', compact('item'));
    }

    public function update(EspecialidadRequest $request, $id)
    {
        //dd($request);
        $item = Especialidad::find($id);

        $item->Num = $request->Num;
        $item->Especialidad = $request->Especialidad;

        $item->save();
        return redirect()->route('Especialidad.index')
        ->with('info', 'la Especialidad fue actualizado');
    }


    public function destroy($item)
    {
        $items = Especialidad::find($item);
        $items->delete();
  
        return redirect()->route('Especialidad.index')->with('danger','la Especialidad fue Eliminado');
    }
}
