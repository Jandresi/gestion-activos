<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activo;
use App\Models\TipoActivo;

class ActivoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$activos = Activo::all();
        $activos = TipoActivo::join('activos', 'tipo_activos.id', '=', 'activos.tipo_activo')->get();
        return view('activos.index')->with('activos', $activos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $tipos = TipoActivo::all();
        return view('activos.create')->with('tipos', $tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $activos = new Activo();

        $activos->codigo_referencia = $request->get('codigo_activo');
        $activos->nombre_activo = $request->get('nombre_activo');
        $activos->tipo_activo = $request->get('tipo_activo');
        $activos->cantidad = $request->get('cantidad');

        $activos->save();

        return redirect('/activos');
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
    public function edit($id){
        $activo = Activo::find($id);
        $tipos = TipoActivo::all();
        return view('activos.edit')->with('activo', $activo)->with('tipos', $tipos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $activo = Activo::find($id);

        $activo->nombre_activo = $request->get('nombre_activo');
        $activo->tipo_activo = $request->get('tipo_activo');
        $activo->cantidad = $request->get('cantidad');

        $activo->save();

        return redirect('/activos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $activo = Activo::find($id);
        $activo->delete();
        return redirect('/activos');
    }
}
