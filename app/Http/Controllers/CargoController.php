<?php
<<<<<<< HEAD
=======

>>>>>>> 6bd2a55e840188eac69e36043bc3648a8116cbb7
namespace App\Http\Controllers;
use App\Models\Cargo;
use App\Http\Requests\CargoRequest;
use Illuminate\Http\Request;
class CargoController extends Controller
{
    public function index()
    {
        $items = Cargo::latest()->paginate(5);
        return view('cargo.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
<<<<<<< HEAD
=======

>>>>>>> 6bd2a55e840188eac69e36043bc3648a8116cbb7
    public function show($item)
    {
        //dd($item);
        $items = Cargo::find($item);
        return view('cargo.show',compact('items'));
    }
<<<<<<< HEAD
=======

>>>>>>> 6bd2a55e840188eac69e36043bc3648a8116cbb7
    public function create()
    {
        return view('cargo.create');
    }
<<<<<<< HEAD
=======


>>>>>>> 6bd2a55e840188eac69e36043bc3648a8116cbb7
    public function store(CargoRequest $request)
    {
        //dd($request);
        $item = new Cargo;
        $item->Num = $request->Num;
        $item->Cargo = $request->Cargo;

        $item->save();
        return redirect()->route('Cargo.index')
        ->with('info', 'el Cargo fue guardado');
    }
<<<<<<< HEAD
=======

>>>>>>> 6bd2a55e840188eac69e36043bc3648a8116cbb7
    public function edit($id)
    {
        $item = Cargo::find($id);
        return view('Cargo.edit', compact('item'));
    }
<<<<<<< HEAD
=======

>>>>>>> 6bd2a55e840188eac69e36043bc3648a8116cbb7
    public function update(CargoRequest $request, $id)
    {
        //dd($request);
        $item = Cargo::find($id);

        $item->Num = $request->Num;
        $item->Cargo = $request->Cargo;

        $item->save();
        return redirect()->route('Cargo.index')
        ->with('info', 'el Cargo fue actualizado');
    }
<<<<<<< HEAD
=======


>>>>>>> 6bd2a55e840188eac69e36043bc3648a8116cbb7
    public function destroy($item)
    {
        $items = Cargo::find($item);
        $items->delete();
  
        return redirect()->route('Cargo.index')->with('danger','el Cargo fue Eliminado');
    }
}
