<?php

namespace App\Http\Controllers;

use App\Http\Requests\School\StoreRequest as SchoolStoreRequest;
use App\Http\Requests\School\UpdateRequest as SchoolUpdateRequest;
use App\Models\School;
use App\Models\Student;
use App\Models\Team;

class SchoolController extends Controller
{
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

    public function createSchool()
    {
        return view('schools.school-school_get_create');
    }

    public function storeSchool(SchoolStoreRequest $request)
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

    public function editSchool($id)
    {
        $school = School::find($id);
        return view('schools.school-school_get_edit', ['school' => $school]);
    }

    public function updateSchool(SchoolUpdateRequest $request, $id)
    {
        $school = School::find($id);
        $school->update($request->all()); 
        return redirect(route('school.get.index'));
    }

    public function destroySchool($id)
    {
        $school = School::find($id);
        $school->delete();
        return redirect(route('school.get.index'));
    }
}
