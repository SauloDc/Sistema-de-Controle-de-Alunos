<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Escola;
use App\Models\Turma;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qtdAlunos = [];
        $escolas = Escola::paginate(10);
        foreach($escolas as $escola)
        {
            $qtdAlunos[$escola->id] =  Aluno::all()->where('escola_id', '=', $escola->id)->count();
        }
        return view('escolas.index', ['escolas' => $escolas, 'qtdAlunos' => $qtdAlunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('escolas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Escola::create($request->all()); 
        return redirect(route('Escola.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escola = Escola::find($id);
        $turmas = Turma::all()->where('escola_id', '=', $id);
        return view('escolas.show', ['escola' => $escola, 'turmas' => $turmas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escola = Escola::find($id);
        return view('escolas.edit', ['escola' => $escola]);
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
        $escola = Escola::find($id);
        $escola->update($request->all()); 
        return redirect(route('Escola.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escola = Escola::find($id);
        $escola->delete();
        return redirect(route('Escola.index'));
    }
}
