@extends('layouts.template')
@section('title', 'Criar Turma')

@section('content')
<form class="mt-4" action="{{ route('Turma.store') }}" method="post"> 
    @include('turmas._partials.form')
</form>
@endsection