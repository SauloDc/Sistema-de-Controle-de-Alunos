@extends('layouts.template')
@section('title', 'Editar Escolas')

@section('content')
    <form class="mt-4" action="{{ route('school.put.edit', $school->id) }}" method="post"> 
        @method('PUT')
        @include('schools._partials.school-school_form')
    </form>
@endsection