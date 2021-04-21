@extends('layouts.template')
@section('title', 'Mostrar Alunos')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ $student->name }}</h1>
            <div class="ml-4">
                <p class="lead">Gênero: {{ $student->gender === 'male' ? "Masculino" : "Feminino" }}</p>
                <p class="lead">Data de Nascimento: {{ date('d/m/Y', strtotime($student->birthday)) }}</p>
                <p class="lead">Telefone: {{ $student->phone }}</p>
                <p class="lead">E-mail: {{ $student->email }}</p>
            </div>
        </div>
    </div>
@endsection