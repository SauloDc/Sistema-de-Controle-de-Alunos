@extends('layouts.template')
@section('title', 'Criar Escolas')

@section('content')
<form class="mt-4" action="{{ route('school.post.store') }}" method="post"> 
    @include('schools._partials.school-school_form')
</form>
@endsection