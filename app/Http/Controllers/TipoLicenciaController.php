<?php

namespace App\Http\Controllers;

use App\Models\TipoLicencia;
use App\Http\Requests\TipoLicenciaRequest;
use Illuminate\Http\Request;

class TipoLicenciaController extends Controller
{
    public function index()
    {
        $items = TipoLicencia::latest()->paginate(5);
        return view('tipolicencia.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = TipoLicencia::find($item);
        return view('tipolicencia.show',compact('items'));
    }

    public function create()
    {
        return view('tipolicencia.create');
    }


    public function store(TipoLicenciaRequest $request)
    {
        //dd($request);
        $item = new TipoLicencia;
        $item->Num = $request->Num;
        $item->TipoLicencia = $request->TipoLicencia;

        $item->save();
        return redirect()->route('TipoLicencia.index')
        ->with('info', 'Tipo Licencia fue guardado');
    }

    public function edit($id)
    {
        $item = TipoLicencia::find($id);
        return view('tipolicencia.edit', compact('item'));
    }

    public function update(TipoLicenciaRequest $request, $id)
    {
        //dd($request);
        $item = TipoLicencia::find($id);

        $item->Num = $request->Num;
        $item->TipoLicencia = $request->TipoLicencia;

        $item->save();
        return redirect()->route('TipoLicencia.index')
        ->with('info', 'Tipo Licencia fue actualizado');
    }


    public function destroy($item)
    {
        $items = TipoLicencia::find($item);
        $items->delete();
  
        return redirect()->route('TipoLicencia.index')->with('danger','Tipo Licencia fue Eliminado');
    }
}
