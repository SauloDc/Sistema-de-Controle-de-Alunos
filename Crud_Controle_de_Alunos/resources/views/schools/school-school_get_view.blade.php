@extends('layouts.template')
@section('title', 'Escolas')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ $school->name }}</h1>
            <p class="lead">Endereço: {{ $school->address }}</p>
        </div>
    </div>
    <div class="card shadow mb-4">
        <nav class="mt-2 mx-2 navbar justify-content-between">
            <h2 class="my-auto">teams</h2>
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
                        @foreach($teams as $team)
                        <tr>
                            <td>{{ $team->id }}</td>
                            <td>{{ date('Y', strtotime($team->year)) }}</td>
                            <td>{{ $team->level }}</td>
                            <td>{{ $team->series }}ª</td>
                            <td>{{ $team->shift }}</td>
                            <td class="text-center" style="display:blocks;">
                                <a class="btn btn-primary" href="{{route('team.get.view', $team->id)}}" title="Mostrar"><i class="far fa-eye text-white"></i></a>
                                <a class="btn btn-success" href="{{route('team.get.edit', $team->id)}}" title="Editar"><i class="far fa-edit text-white"></i></a>
                                <form action="{{route('team.delete.destroy', $team->id)}}" method="post" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class=" center btn btn-danger" type="submit" title="Apagar"><i class="far fa-trash-alt text-white"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection