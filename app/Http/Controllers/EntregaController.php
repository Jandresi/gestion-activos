<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activo;
use App\Models\Receptor;
use App\Models\Entrega;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\ActivoController;

class EntregaController extends Controller
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
        $entregas = Entrega::join('activos', 'entregas.elemento', '=', 'activos.id')
        ->join('receptors', 'entregas.recibe', '=', 'receptors.id')
        ->join('users', 'entregas.creador', '=', 'users.id')->get();
        return view('entregas.index')->with('entregas', $entregas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sessions = Session::join('users', 'sessions.user_id', '=', 'users.id')->get();
        $receptors = Receptor::all();
        $elementos = Activo::all();
        return view('entregas.create')->with('sessions', $sessions)->with('receptors', $receptors)->with('elementos', $elementos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $entregas = new Entrega();

        $entregas->creador = $request->get('user');
        $entregas->recibe = $request->get('receptor');
        $entregas->elemento = $request->get('activo');
        $entregas->unidades = $request->get('cantidad');
        $entregas->save();

        $activo = Activo::find($request->get('activo'));
        $nuevaCantidadActivo = ($activo->cantidad - $request->get('cantidad'));
        $activo->cantidad = $nuevaCantidadActivo;
        $activo->save();

        return redirect('/entregas/create');
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
