<?php
namespace App\Http\Controllers;
use App\Models\Rol;
use App\Http\Requests\RolRequest;
use Illuminate\Http\Request;
class RolController extends Controller
{
    public function index()
    {
        $items = Rol::latest()->paginate(5);
        return view('rol.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show($item)
    {
        //dd($item);
        $items = Rol::find($item);
        return view('rol.show',compact('items'));
    }
    public function create()
    {
        return view('rol.create');
    }
    public function store(RolRequest $request)
    {
        //dd($request);
        $item = new Rol;
        $item->Num = $request->Num;
        $item->Rol = $request->Rol;

        $item->save();
        return redirect()->route('Rol.index')
        ->with('info', 'el Rol fue guardado');
    }
    public function edit($id)
    {
        $item = Rol::find($id);
        return view('rol.edit', compact('item'));
    }
    public function update(RolRequest $request, $id)
    {
        //dd($request);
        $item = Rol::find($id);

        $item->Num = $request->Num;
        $item->Rol = $request->Rol;

        $item->save();
        return redirect()->route('Rol.index')
        ->with('info', 'El Rol fue actualizado');
    }
    public function destroy($item)
    {
        $items = Rol::find($item);
        $items->delete();
  
        return redirect()->route('Rol.index')->with('danger','El Rol fue Eliminado');
    }
}
