<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inteligencia;
use App\Models\Prompt;
use App\Models\Publico;
use App\Models\Empresa;
use App\Models\Phome;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projeto = Phome::all();
        $inteligencia = Inteligencia::orderBy('created_at', 'desc')->get();
        $prompt = Prompt::all();
        $publico = Publico::all();
        $empresa = Empresa::all();

        return view('welcome', compact('inteligencia', 'prompt', 'publico', 'empresa', 'projeto'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ishow($id)
    {
        $inteligencia = Inteligencia::find($id);
        return view('inteligencia.show', compact('inteligencia'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pshow($id)
    {
        $prompt = Prompt::find($id);
        return view('prompt.show', compact('prompt'));
    }
}
