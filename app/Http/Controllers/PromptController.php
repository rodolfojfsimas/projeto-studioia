<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prompt;

class PromptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prompt = Prompt::orderBy('created_at', 'desc')->get();
        return view('prompt.index', compact('prompt'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prompt = Prompt::find($id);
        return view('prompt.show', compact('prompt'));
    }
}
