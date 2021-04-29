@extends('layouts.template')
@section('title', 'Escolas')

@section('content')

<div class="card shadow mb-4">
    <nav class="mt-2 mx-2 navbar justify-content-between">
        <h2 class="my-auto">Escolas</h2>
        <form class="form-inline" action="{{ route('school.get.create_view') }}" method="get">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Criar Escola</button>
        </form>
    </nav>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Escola</th>
                        <th>Endereço</th>
                        <th>Qtd Alunos</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schools as $school)
                    <tr>
                        <td>{{ $school->id }}</td>
                        <td>{{ $school->name }}</td>
                        <td>{{ $school->address }}</td>
                        <td>{{ $qtyStudents[$school->id] }}</td>
                        <td class="text-center" style="display:blocks;">
                            <a class="btn btn-primary" href="{{route('school.get.view', $school->id)}}" title="Mostrar"><i class="far fa-eye text-white"></i></a>
                            <a class="btn btn-success" href="{{route('school.get.edit_view', $school->id)}}" title="Editar"><i class="far fa-edit text-white"></i></a>
                            <form action="{{route('school.delete.delete', $school->id)}}" method="post" style="display:inline">
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
                    {{ $schools->links() }}
                </div>
            </nav>
        </div>
    </div>
    @endsection