<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inteligencia;

class InteligenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inteligencia = Inteligencia::all();
        return view('inteligencia.index', compact('inteligencia'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inteligencia = Inteligencia::find($id);
        return view('inteligencia.show', compact('inteligencia'));
    }
}
