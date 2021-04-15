@extends('layouts.template')
@section('title', 'Editar Aluno')

@section('content')
    <form class="mt-4" action="{{ route('Aluno.update', $aluno->id) }}" method="post"> 
        @method('PUT')
        @include('alunos._partials.form')
    </form>
@endsection

