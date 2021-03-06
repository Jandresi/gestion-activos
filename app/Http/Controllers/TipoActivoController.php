<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoActivo;

class TipoActivoController extends Controller
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
        $tipos = TipoActivo::all();
        return view('tipoActivos.index')->with('tipos', $tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoActivos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipos = new TipoActivo();

        $tipos->tipo = $request->get('nombre_tipo');
        $tipos->descripcion = $request->get('descripcion_tipo');

        $tipos->save();

        return redirect('/tipo-activos');
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
        $tipo = TipoActivo::find($id);
        return view('tipoActivos.edit')->with('tipo', $tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $tipo = TipoActivo::find($id);

        $tipo->tipo = $request->get('nombre_tipo');
        $tipo->descripcion = $request->get('descripcion_tipo');

        $tipo->save();

        return redirect('/tipo-activos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $tipo = TipoActivo::find($id);
        $tipo->delete();
        return redirect('/tipo-activos');
    }
}
