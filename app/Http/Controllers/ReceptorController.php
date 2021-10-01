<?php

namespace App\Http\Controllers;

use App\Models\Receptor;
use Illuminate\Http\Request;

class ReceptorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receptores = Receptor::all();
        return view('receptores.index')->with('receptores', $receptores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('receptores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receptores = new Receptor();

        $receptores->id = $request->get('id');
        $receptores->nombre_receptor = $request->get('nombres');
        $receptores->cargo = $request->get('cargo');

        $receptores->save();

        return redirect('/receptores');
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
        $receptor = Receptor::find($id);
        return view('receptores.edit')->with('receptor', $receptor);
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
        $receptor = Receptor::find($id);

        $receptor->id = $request->get('id');
        $receptor->nombre_receptor = $request->get('nombres');
        $receptor->cargo = $request->get('cargo');

        $receptor->save();

        return redirect('/receptores');
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
