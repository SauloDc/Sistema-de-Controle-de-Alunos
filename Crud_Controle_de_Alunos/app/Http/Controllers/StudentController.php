<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest as StudentStoreRequest;
use App\Http\Requests\Student\UpdateRequest as StudentUpdateRequest;
use App\Models\School;
use App\Models\Student;
use App\Models\Team;

class StudentController extends Controller
{
    
    public function indexStudent()
    {
        $students = Student::paginate(10);
        return view('students.student-student_get_index', ['students' => $students]);
    }

    public function createStudent()
    {
        $schools = School::all();
        $teams = Team::all();
        return view('students.student-student_get_create',['schools' => $schools, 'teams' => $teams]);
    }

    public function storeStudent(StudentStoreRequest $request)
    {
        $validated = $request->validated();
        Student::create($request->all()); 
        return redirect(route('student.get.index'));
    }

    public function viewStudent($id)
    {
        $student = Student::find($id);
        return view('students.student-student_get_view', ['student' => $student]);
    }

    public function editStudent($id)
    {
        $student = Student::find($id);
        $schools = School::all();
        $teams = Team::all();
        return view('students.student-student_get_edit', ['student' => $student, 'schools' => $schools, 'teams' => $teams]);
    }

    public function updateStudent(StudentUpdateRequest $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all()); 
        return redirect(route('student.get.index'));
    }

    public function destroyStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect(route('student.get.index'));
    }
}
