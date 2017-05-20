<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Deportista;
use App\Fuerza;
use DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $deportista = Deportista::where('dni_j', '=', $id)->get();
        return view('/test_fuerza', compact('deportista'));
    }

    public function listartestfuerza($id)
    {
      $fuerza = Deportista::where('dni_j', '=', $id)->join('fuerza', 'fuerza.dni_jfz', '=', 'deportista.dni_j')->get();
      $deportista = Deportista::where('dni_j', '=', $id)->get();
      return view('listar_test_fuerza', compact('fuerza', 'deportista'));
    }

    public function guardarfuerza(Request $request, $id)
    {
      $deportista = Deportista::where('dni_j', $id);

        $datos = array (
          'fecha_fz' => date($request->fecha),
          'sit_up' => $request->situp,
          'press_banca' => $request->pressbanca,
          'curl_biceps' => $request->curlbiceps,
          'sentadilla' => $request->sentadilla,
          'f_hombro' => $request->hombro,
          'dni_jfz' => $id
        );
        //dd($datos);

        $fuerza = new Fuerza($datos);
        $fuerza->save();
        return redirect()->route('listtestfuerza', ['dni_j' => $id]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
