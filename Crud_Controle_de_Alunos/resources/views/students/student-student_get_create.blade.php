@extends('layouts.template')
@section('title', 'Criar Alunos')

@section('content')
    <form class="mt-4" action="{{ route('student.post.new') }}" method="post"> 
        @include('students._partials.student-student_form')
    </form>
@endsection