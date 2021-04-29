<?php

namespace App\Http\Controllers;

use App\Http\Requests\School\NewRequest as NewSchoolRequest;
use App\Http\Requests\School\EditRequest as EditSchoolRequest;
use App\Models\School;
use App\Models\Student;
use App\Models\Team;

class SchoolController extends Controller
{
    public function newSchool(NewSchoolRequest $request)
    {
        School::create($request->all()); 
        return redirect(route('school.get.index'));
    }
    
    public function viewSchool($id)
    {
        $school = School::find($id);
        $teams = Team::all()->where('school_id', '=', $id);
        return view('schools.school-school_get_view', ['school' => $school, 'teams' => $teams]);
    }
    
    public function editSchool(EditSchoolRequest $request, $id)
    {
        $school = School::find($id);
        $school->update($request->all()); 
        return redirect(route('school.get.index'));
    }
    
    public function deleteSchool($id)
    {
        $school = School::find($id);
        $school->delete();
        return redirect(route('school.get.index'));
    }
    
    public function indexSchool()
    {
        $qtyStudents = [];
        $schools = School::paginate(10);
        foreach($schools as $school)
        {
            $qtyStudents[$school->id] =  Student::all()->where('school_id', '=', $school->id)->count();
        }
        return view('schools.school-school_get_index', ['schools' => $schools, 'qtyStudents' => $qtyStudents]);
    }
    
    public function viewCreateSchool()
    {
        return view('schools.school-school_get_create');
    }

    public function viewEditSchool($id)
    {
        $school = School::find($id);
        return view('schools.school-school_get_edit', ['school' => $school]);
    }
}
