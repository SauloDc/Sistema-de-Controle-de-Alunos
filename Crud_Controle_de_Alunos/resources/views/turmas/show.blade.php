@extends('layouts.template')
@section('title', 'Mostrar Turma')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Turma: {{ date('Y', strtotime($turma->ano)) }}</h1>
        <p class="lead">{{$turma->serie }}ª Série {{ $turma->nivel}}</p>
        <p class="lead"></p>
        <p class="lead">Turno: {{ $turma->turno }}</p>
    </div>
</div>

<div class="card shadow mb-4">
    <nav class="mt-2 mx-2 navbar justify-content-between">
        <h2 class="my-auto">Alunos</h2>
        <form class="form-inline" action="{{ route('Aluno.update', 'turma_id') }}" method="post">
            @method('PUT')
            <select class="form-control" name="aluno_id" value="{{ @$aluno->escola_id ?? old('escola_id') }}" required>
                <option>Escolha o Aluno</option>
                @foreach($alunosEscola as $aluno)
                    <option value="{{ $aluno->id }}">{{ $aluno->id }} - {{ $aluno->nome }}</option>
                @endforeach
            </select>
            <button class="btn btn-success my-2 my-sm-0" type="submit">Inserir Aluno</button>
        </form>
    </nav>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Data Nascimento</th>
                        <th>Genero</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->id }}</td>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->telefone }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>{{ date('d-m-Y', strtotime($aluno->dataNascimento))}}</td>
                        <td>{{ $aluno->sexo === 'male' ? "Masculino" : "Feminino" }}</td>
                        <td class="text-center" style="display:blocks;">
                            <a class="btn btn-primary" href="{{route('Aluno.show', $aluno->id)}}" title="Mostrar"><i class="far fa-eye text-white"></i></a>
                            <a class="btn btn-success" href="{{route('Aluno.edit', $aluno->id)}}" title="Editar"><i class="far fa-edit text-white"></i></a>
                            <form action="{{route('Aluno.destroy', $aluno->id)}}" method="post" style="display:inline">
                                @method('DELETE')
                                @csrf
                                <button class=" center btn btn-danger" type="submit" title="Apagar"><i class="far fa-trash-alt text-white"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav>
                <div class="pagination justify-content-end">
                    {{ $alunos->links() }}
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection