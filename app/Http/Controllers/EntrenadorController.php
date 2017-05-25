<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class EntrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenadores = User::all();

        return view('listar_entrenadores', compact('entrenadores'));
    }

    public function mostrarformulario(){
      return view('entrenador');
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
    public function store(Request $request)
    {


          $datos = array (
          'dni' => $request->dni,
          'name' => $request->name,
          'apellido' => $request->apellido,
          'sexo' => $request->sexo,
          'profesion' => $request->profesion,
          'direccion' => $request->direccion,
          'deporte' => $request->deporte,
          'email' => $request->email,
          'password' => bcrypt($request->password)
      );
      $entrenador = new User($datos);
      $entrenador->save();
      return redirect()->route('listar.entrenador');
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
    public function update(Request $request, $id)
    {
        $entrenador = User::FindOrFail($id);

        $request = array (
          'name' => $request->name,
          'apellido' => $request->apellido,
          'email' => $request->email,
          'sexo' => $request->sexo,
          'profesion' => $request->profesion,
          'direccion' => $request->direccion,
          'deporte' => $request->deporte
        );

        $id_entrenador = $entrenador->dni;
        $entrenador->fill($request);
        $entrenador->save();
        return redirect()->route('listar.entrenador');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entrenador = User::FindOrFail($id);
        $eliminar = $entrenador->delete();

        return back()->withInput();
    }

    public function editarentrenador($id)
    {
      $entrenador = User::where('dni', '=', $id)->get();
      return view('/editar_entrenador', compact('entrenador'));
    }

    public function inicioplataforma()
    {
      return view('inicio_plataforma');
    }
}
