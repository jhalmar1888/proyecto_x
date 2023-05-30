<?php
namespace App\Http\Controllers;

use App\Models\Persona;
use App\Http\Requests\PersonaRequest;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::paginate();

        $items = Persona::latest()->paginate(5);
        return view('persona.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Persona;
        $item->Gerencia = $request->Gerencia;
        $item->Rol = $request->Rol;
        $item->ApellidoPaterno = $request->ApellidoPaterno;
        $item->ApellidoMaterno = $request->ApellidoMaterno;
        $item->Nombres = $request->Nombres;
        //$item->Persona = $request->Persona;
        //$item->Fotografia = $request->Fotografia;
        $item->Ci = $request->Ci;
        $item->DepDocId = $request->DepDocId;
        $item->Arma = $request->Arma;
        $item->Especialidad = $request->Especialidad;
        $item->Cargo = $request->Cargo;
        $item->TipoLicencia = $request->TipoLicencia;
        $item->Profesion = $request->Profesion;
        $item->Celular = $request->Celular;
        $item->Sexo = $request->Sexo;
        $item->Archivo = $request->Archivo;
        $item->Reparticion = $request->Reparticion;
    
        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Persona fue registrada');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($item)
    {
        //dd($item);
        $items = Persona::find($item);
        return view('persona.show',compact('items')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Persona::find($id);
        return view('persona.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Persona $persona
     * @return \Illuminate\Http\Response
     */
    public function update(PersonaRequest $request, $id)
    {
        $item = Persona::find($id);
        $item->Gerencia = $request->Gerencia;
        $item->Rol = $request->Rol;
        $item->ApellidoPaterno = $request->ApellidoPaterno;
        $item->ApellidoMaterno = $request->ApellidoMaterno;
        $item->Nombres = $request->Nombres;
        //$item->Persona = $request->Persona;
        //$item->Fotografia = $request->Fotografia;
        $item->Ci = $request->Ci;
        $item->DepDocId = $request->DepDocId;
        $item->Arma = $request->Arma;
        $item->Especialidad = $request->Especialidad;
        $item->Cargo = $request->Cargo;
        $item->TipoLicencia = $request->TipoLicencia;
        $item->Profesion = $request->Profesion;
        $item->Celular = $request->Celular;
        $item->Sexo = $request->Sexo;
        $item->Archivo = $request->Archivo;
        $item->Reparticion = $request->Reparticion;

        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Persona fue actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($item)
    {
        $items = Persona::find($item);
        $items->delete();
  
        return redirect()->route('Persona.index')->with('danger','Persona fue Eliminada');

    }
}
