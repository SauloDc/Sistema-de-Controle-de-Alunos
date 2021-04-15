@extends('layouts.template')
@section('title', 'Criar Alunos')

@section('content')
    <form class="mt-4" action="{{ route('Aluno.store') }}" method="post"> 
        @include('alunos._partials.form')
    </form>
@endsection