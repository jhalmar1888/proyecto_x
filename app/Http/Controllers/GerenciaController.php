<?php

namespace App\Http\Controllers;

use App\Models\Gerencia;
use App\Http\Requests\GerenciaRequest;
use Illuminate\Http\Request;

class GerenciaController extends Controller
{
    public function index()
    {
        $items = Gerencia::latest()->paginate(5);
        return view('gerencia.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Gerencia::find($item);
        return view('gerencia.show',compact('items'));
    }

    public function create()
    {
        return view('gerencia.create');
    }


    public function store(GerenciaRequest $request)
    {
        //dd($request);
        $item = new Gerencia;
        $item->Num = $request->Num;
        $item->Gerencia = $request->Gerencia;
        $item->Sigla = $request->Sigla;
        $item->Alias = $request->Alias;
        $item->idSaga = $request->idSaga;

        $item->save();
        return redirect()->route('Gerencia.index')
        ->with('info', 'Gerencia fue guardado');
    }

    public function edit($id)
    {
        $item = Gerencia::find($id);
        return view('gerencia.edit', compact('item'));
    }

    public function update(GerenciaRequest $request, $id)
    {
        //dd($request);
        $item = Gerencia::find($id);

        $item->Num = $request->Num;
        $item->Gerencia = $request->Gerencia;
        $item->Sigla = $request->Sigla;
        $item->Alias = $request->Alias;
        $item->idSaga = $request->idSaga;

        $item->save();
        return redirect()->route('Gerencia.index')
        ->with('info', 'Gerencia fue actualizado');
    }


    public function destroy($item)
    {
        $items = Gerencia::find($item);
        $items->delete();
  
        return redirect()->route('Gerencia.index')->with('danger','TGerencia fue Eliminado');
    }
}
