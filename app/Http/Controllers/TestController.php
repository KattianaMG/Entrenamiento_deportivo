<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Deportista;
use App\Fuerza;
use App\Recistencia;
use App\C_crporal;
use App\Flexibilidad;
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

    public function eliminarfuerza($id)
    {
      $fuerza = Fuerza::FindOrFail($id);
      $eliminar = $fuerza->delete();

      return back()->withInput();
    }


    public function listartestresistencia($id)
    {
      $deportista = Deportista::where('dni_j', '=', $id)->get();
      $resistencia = Deportista::where('dni_j', '=', $id)->join('resistencia', 'resistencia.dni_jres', '=', 'deportista.dni_j')->get();
      return view('listar_test_resistencia', compact('resistencia', 'deportista'));
    }

    public function index2($id)
    {
      $deportista = Deportista::where('dni_j', '=', $id)->get();
        return view('/test_resistencia', compact('deportista'));
    }

    public function guardarresistencia(Request $request, $id)
    {
      $deportista = Deportista::where('dni_j', $id);

        $datos = array (
          'fecha_res' => date($request->fecha),
          'cooper' => $request->cooper,
          'leger' => $request->leger,
          'burpee' => $request->burpees,
          'dni_jres' => $id
        );
        //dd($datos);

        $resistencia = new Recistencia($datos);
        $resistencia->save();
        return redirect()->route('listarresistencia', ['dni_j' => $id]);
    }

    public function eliminarresistencia($id)
    {
      $resistencia = Recistencia::FindOrFail($id);
      $eliminar = $resistencia->delete();

      return back()->withInput();
    }

    public function listarflexibilidad($id)
    {
      $deportista = Deportista::where('dni_j', '=', $id)->get();
      $flexibilidad = Deportista::where('dni_j', '=', $id)->join('flexibilidad', 'flexibilidad.dni_fj', '=', 'deportista.dni_j')->get();
      return view('listar_test_flexibilidad', compact('flexibilidad', 'deportista'));
    }

    public function index3($id)
    {
      $deportista = Deportista::where('dni_j', '=', $id)->get();
        return view('/test_flexibilidad', compact('deportista'));
    }

    public function guardarflexibilidad(Request $request, $id)
    {
      $deportista = Deportista::where('dni_j', $id);

        $datos = array (
          'fecha_fl' => date($request->fecha),
          'well' => $request->well,
          'f_profunda' => $request->flexion_profunda,
          'split_lateral' => $request->split_lateral,
          'elev_hombro' => $request->elevacion_hombros,
          'dni_fj' => $id
        );
        //dd($datos);

        $flexibilidad = new Flexibilidad($datos);
        $flexibilidad->save();
        return redirect()->route('listarflexibilidad', ['dni_j' => $id]);
    }

    public function eliminarflexibilidad($id)
    {
      $flexibilidad = Flexibilidad::FindOrFail($id);
      $eliminar = $flexibilidad->delete();

      return back()->withInput();
    }

    public function listarcorporal($id)
    {
      $deportista = Deportista::where('dni_j', '=', $id)->get();
      $corporal = Deportista::where('dni_j', '=', $id)->join('c_crporal', 'c_crporal.dni_cj', '=', 'deportista.dni_j')->get();
      return view('listar_test_corporal', compact('corporal', 'deportista'));
    }

    public function index4($id)
    {
      $deportista = Deportista::where('dni_j', '=', $id)->get();
        return view('/test_corporal', compact('deportista'));
    }

    public function guardarcorporal(Request $request, $id)
    {
      $deportista = Deportista::where('dni_j', $id);

        $datos = array (
          'fecha_cc' => date($request->fecha),
          'talla' => $request->talla,
          'peso' => $request->peso,
          'imc' => $request->imc,
          'p_abdominal' => $request->p_abdominal,
          'dni_cj' => $id
        );
        //dd($datos);

        $corporal = new C_crporal($datos);
        $corporal->save();
        return redirect()->route('listarcorporal', ['dni_j' => $id]);
    }

    public function eliminarcorporal($id)
    {
      $corporal = C_crporal::FindOrFail($id);
      $eliminar = $corporal->delete();

      return back()->withInput();
    }
  }
