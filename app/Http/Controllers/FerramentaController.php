<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ferramenta;
use App\Models\Grupo;
use App\Models\Desenvolvedor;


class FerramentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desenvolvedor = Desenvolvedor::all();
        $ferramenta = Ferramenta::all();
        $grupo = Grupo::all();
        return view('ferramenta.index', compact('grupo', 'ferramenta', 'desenvolvedor'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ferramenta = Ferramenta::all();
        $grupo = Grupo::find($id);
        return view('ferramenta.show', compact('ferramenta', 'grupo'));
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
