@extends('layouts.template')
@section('title', 'Editar Turma')

@section('content')
    <form class="mt-4" action="{{ route('team.put.edit', $team->id) }}" method="post"> 
        @method('PUT')
        @include('teams._partials.team-team_form')
    </form>
@endsection