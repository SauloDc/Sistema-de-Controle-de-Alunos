@extends('layouts.template')
@section('title', 'Criar Escolas')

@section('content')
<form class="mt-4" action="{{ route('Escola.store') }}" method="post"> 
    @include('escolas._partials.form')
</form>
@endsection