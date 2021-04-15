@extends('layouts.template')
@section('title', 'Editar Turma')

@section('content')
    <form class="mt-4" action="{{ route('Turma.update', $turma->id) }}" method="post"> 
        @method('PUT')
        @include('turmas._partials.form')
    </form>
@endsection