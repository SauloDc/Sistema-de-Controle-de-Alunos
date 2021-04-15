@extends('layouts.template')
@section('title', 'Alunos')

@section('content')

<div class="card shadow mb-4">
    <nav class="navbar">
        <div class="mx-auto mt-3">
            <form class="form-inline" action="{{ route('Aluno.create') }}" method="get">
                <h2 class="mr-4 my-auto">Alunos</h2>
                <button class="btn btn-success" type="submit">Criar Aluno</button>
            </form>
        </div>
        <div class="form-inline justify-content-end mx-auto mt-3">
            <form class="col my-auto" action="">
                <div class="form-group input-group-append mr-4">
                    <input class="form-control mr-2" type="search" placeholder="Search">
                    <button class="btn btn-success" type="submit">Buscar</button>
                </div>
            </form>
        </div>
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
                        <td>{{ date('d/m/Y', strtotime($aluno->dataNascimento)) }}</td>
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