@extends('layouts.template')
@section('title', 'Editar Aluno')

@section('content')
    <form class="mt-4" action="{{ route('student.put.update', $student->id) }}" method="post"> 
        @method('PUT')
        @include('students._partials.student-student_form')
    </form>
@endsection

