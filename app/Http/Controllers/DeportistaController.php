<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Deportista;
use DB;
use Illuminate\Support\Facades\Auth;

class DeportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deportistas = Deportista::where('fk_entrenador', Auth::user()->dni)->get();//consulta
        //liste deportistas siempre que fk_entrenador sea igual a dni del entrenador logueado
        return view('/listar_deportistas', compact('deportistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//registrar deportista
    {
        $entrenador =  Auth::user()->dni;//capturar entrenador

        $datos = array (
          'dni_j' => $request->dni,
          'nombre_j' => $request->nombre,
          'apellido_j'=> $request->apellido,
          'sexo_j' => $request->sexo,
          'deporte_j' => $request->deporte,
          'semestre' => $request->semestre,
          'promedio' => $request->promedio,
          'edad_j' => $request->edad,
          'fk_entrenador' => $entrenador
        );
        $deportista = new Deportista($datos);
        $deportista->save();
        return redirect()->route('listar.deportista');
    }

    public function consultarentrenador()
    {
      $consulta = User::all();//consultar entrenador y mandarlo a la vista
      return view('deportista', compact('consulta'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//metodo editar Deportistas
    {
        $deportista = Deportista::FindOrFail($id);

        $request = array (
          'nombre_j' => $request->nombre,
          'apellido_j' => $request->apellido,
          'sexo_j' => $request->sexo,
          'deporte_j' => $request->deporte,
          'semestre' => $request->semestre,
          'promedio' => $request->promedio,
          'edad_j' => $request->edad
        );

        $id_deportista = $deportista->dni_j;
        $deportista->fill($request);
        $deportista->save();
        return redirect()->route('listar.deportista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//eliminar deportistas
    {
        $deportista = Deportista::FindOrFail($id);
        $eliminar = $deportista->delete();

        return back()->withInput();
    }

    public function editardeportista($id)
    {
      $deportista = Deportista::where('dni_j', '=', $id)->get();
      return view('editar_deportista', compact('deportista'));
    }
}
