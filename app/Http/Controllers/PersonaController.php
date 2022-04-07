<?php

namespace App\Http\Controllers;

use App\Models\Persona;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    
    public function index()
    {
        $personas = Persona::all();

        $data = [
            'personas' => $personas,
        ];

        return view('personas.index', $data);
    }

    
    public function create()
    {
        return view('personas.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            
            'carnet' => ['numeric','unique:personas,carnet'],
            'nombre' => 'min:4',
            'pais' => 'min:4',
            'ciudad' => 'min:4',
            'direccion' => 'min:6'
        ]);

        $persona = new Persona();
        $persona->carnet = $request->carnet;
        $persona->correo = $request->correo;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->pais = $request->pais;
        $persona->ciudad = $request->ciudad;
        $persona->direccion = $request->direccion;
        $persona->save();
        return redirect()->route('personas.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
