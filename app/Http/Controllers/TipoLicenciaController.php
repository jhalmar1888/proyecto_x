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

    public function list(Request $request)
    {
        
    }

    public function show(TipoLicenciaRequest $item)
    {
        //dd($item);
        return view('tipolicencia.show',compact('item'));
    }

    public function store(TipoLicenciaRequest $request)
    {
        if ($request->id) {
            $item = TipoLicencia::findOrFail($request->id);
            $msg = trans('messages.updated');
        } else {
            $item = new TipoLicencia();
            $msg = trans('messages.added');
        }

        $item->Num = $request->Num;
        $item->TipoLicencia = $request->TipoLicencia;
        $item->save();

        
    }

    public function destroy(Request $item)
    {
        //$item = TipoLicencia::find($item);
        $item->delete();
  
        return redirect()->route('tipolicencia.index')->with('success','Product deleted successfully');
    }
}
