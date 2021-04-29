@extends('layouts.template')
@section('title', 'Criar Turma')

@section('content')
<form class="mt-4" action="{{ route('team.post.new') }}" method="post"> 
    @include('teams._partials.team-team_form')
</form>
@endsection