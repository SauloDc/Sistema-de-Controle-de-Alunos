@extends('layouts.template')
@section('title', 'Editar Escolas')

@section('content')
    <form class="mt-4" action="{{ route('Escola.update', $escola->id) }}" method="post"> 
        @method('PUT')
        @include('escolas._partials.form')
    </form>
@endsection