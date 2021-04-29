<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\NewRequest as NewStudentRequest;
use App\Http\Requests\Student\EditRequest as EditStudentRequest;
use App\Models\School;
use App\Models\Student;
use App\Models\Team;

class StudentController extends Controller
{
    public function newStudent(NewStudentRequest $request)
    {
        Student::create($request->all()); 
        return redirect(route('student.get.index'));
    }
    
    public function viewStudent($id)
    {
        $student = Student::find($id);
        return view('students.student-student_get_view', ['student' => $student]);
    }
    
    public function editStudent(EditStudentRequest $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all()); 
        return redirect(route('student.get.index'));
    }
    
    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect(route('student.get.index'));
    }

    public function indexStudent()
    {
        $students = Student::paginate(10);
        return view('students.student-student_get_index', ['students' => $students]);
    }
    
    public function viewCreateStudent()
    {
        $schools = School::all();
        $teams = Team::all();
        return view('students.student-student_get_create',['schools' => $schools, 'teams' => $teams]);
    }
    
    public function viewEditStudent($id)
    {
        $student = Student::find($id);
        $schools = School::all();
        $teams = Team::all();
        return view('students.student-student_get_edit', ['student' => $student, 'schools' => $schools, 'teams' => $teams]);
    }    
}
