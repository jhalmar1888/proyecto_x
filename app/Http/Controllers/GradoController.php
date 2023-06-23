<?php

namespace App\Http\Controllers;
use App\Models\Grado;
use App\Http\Requests\GradoRequest;
<<<<<<< HEAD
use Illuminate\Http\Request
=======
use Illuminate\Http\Request;
>>>>>>> be915838211c301f0db88dabb03da7dd95a9d3de
class GradoController extends Controller
{
    public function index()
    {
        $items = Grado::latest()->paginate(5);
        return view('grado.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Grado::find($item);
        return view('grado.show',compact('items'));
    }

    public function create()
    {
        return view('grado.create');
    }


    public function store(GradoRequest $request)
    {
        //dd($request);
        $item = new Grado;
        $item->Num = $request->Num;
        $item->Grado = $request->Grado;

        $item->save();
        return redirect()->route('Grado.index')
        ->with('info', 'el Grado fue guardado');
    }

    public function edit($id)
    {
        $item = Grado::find($id);
        return view('Grado.edit', compact('item'));
    }

    public function update(GradoRequest $request, $id)
    {
        //dd($request);
        $item = Grado::find($id);

        $item->Num = $request->Num;
        $item->Grado = $request->Grado;

        $item->save();
        return redirect()->route('Grado.index')
        ->with('info', 'el Grado fue actualizado');
    }


    public function destroy($item)
    {
        $items = Grado::find($item);
        $items->delete();
  
        return redirect()->route('Grado.index')->with('danger','el Grado fue Eliminado');
    }
}
