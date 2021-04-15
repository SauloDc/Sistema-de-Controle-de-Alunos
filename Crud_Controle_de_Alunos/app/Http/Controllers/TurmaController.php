<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::paginate(10);
        return view('turmas.index', ['turmas' => $turmas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Turma::create($request->all()); 
        return redirect(route('Turma.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $alunos = Aluno::whereHas('turmas', function($query) use ($id) {
        //                 $query->where('turma_id', $id);
        //                 // dd($query);
        // });
        // dd($alunos->get());
        // $turma = Turma::where('id',$id)->alunos;
        // dd($turma);
        // $alunos = $turma->alunos->paginate(10);

        $turma = Turma::find($id);

        $alunos = DB::table('alunos')
                ->leftJoin('aluno_turma', 'alunos.id', '=', 'aluno_turma.aluno_id')
                ->where('turma_id', '=', $turma->id)
                ->paginate(10);

        return view('turmas.show', ['turma' => $turma, 'alunos' => $alunos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turma = Turma::find($id);
        return view('turmas.edit', ['turma' => $turma]);
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
        $turma = Turma::find($id);
        $turma->update($request->all()); 
        return redirect(route('Turma.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turma = Turma::find($id);
        $turma->delete();
        return redirect(route('Turma.index'));
    }
}
