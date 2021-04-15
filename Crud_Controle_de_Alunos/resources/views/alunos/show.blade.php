@extends('layouts.template')
@section('title', 'Mostrar Alunos')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ $aluno->nome }}</h1>
            <div class="ml-4">
                <p class="lead">Gênero: {{ $aluno->sexo === 'male' ? "Masculino" : "Feminino" }}</p>
                <p class="lead">Data de Nascimento: {{ date('d/m/Y', strtotime($aluno->dataNascimento)) }}</p>
                <p class="lead">Telefone: {{ $aluno->telefone }}</p>
                <p class="lead">E-mail: {{ $aluno->email }}</p>
            </div>
        </div>
    </div>
@endsection