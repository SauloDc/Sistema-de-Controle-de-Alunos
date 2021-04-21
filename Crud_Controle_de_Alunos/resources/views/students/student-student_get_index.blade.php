@extends('layouts.template')
@section('title', 'students')

@section('content')

<div class="card shadow mb-4">
    <nav class="mt-2 mx-2 navbar justify-content-between">
        <h2 class="my-auto">Alunos</h2>
        <form class="form-inline" action="{{route('student.get.create')}}" method="get">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Criar Aluno</button>
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
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($student->birthday)) }}</td>
                        <td>{{ $student->gender === 'male' ? "Masculino" : "Feminino" }}</td>
                        <td class="text-center" style="display:blocks;">
                            <a class="btn btn-primary" href="{{route('student.get.view', $student->id)}}" title="Mostrar"><i class="far fa-eye text-white"></i></a>
                            <a class="btn btn-success" href="{{route('student.get.edit', $student->id)}}" title="Editar"><i class="far fa-edit text-white"></i></a>
                            <form action="{{route('student.delete.destroy', $student->id)}}" method="post" style="display:inline">
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
                    {{ $students->links() }}
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection