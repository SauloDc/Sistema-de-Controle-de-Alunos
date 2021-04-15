@extends('layouts.template')
@section('title', 'Turmas')

@section('content')

<div class="card shadow mb-4">
    <nav class="mt-2 mx-2 navbar justify-content-between">
        <h2 class="my-auto">Turmas</h2>
        <form class="form-inline" action="{{route('Turma.create')}}" method="get">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Criar Turma</button>
        </form>
    </nav>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ano</th>
                        <th>Nivel de Ensino</th>
                        <th>Série</th>
                        <th>Turno</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($turmas as $turma)
                    <tr>
                        <td>{{ $turma->id }}</td>
                        <td>{{ date('Y', strtotime($turma->ano)) }}</td>
                        <td>{{ $turma->nivel }}</td>
                        <td>{{ $turma->serie }}ª</td>
                        <td>{{ $turma->turno }}</td>
                        <td class="text-center" style="display:blocks;">
                            <a class="btn btn-primary" href="{{route('Turma.show', $turma->id)}}" title="Mostrar"><i class="far fa-eye text-white"></i></a>
                            <a class="btn btn-success" href="{{route('Turma.edit', $turma->id)}}" title="Editar"><i class="far fa-edit text-white"></i></a>
                            <form action="{{route('Turma.destroy', $turma->id)}}" method="post" style="display:inline">
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
                    {{ $turmas->links() }}
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection