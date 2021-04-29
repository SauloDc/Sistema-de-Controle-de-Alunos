<?php

namespace App\Http\Controllers;

use App\Http\Requests\Team\NewRequest as NewTeamRequest; 
use App\Http\Requests\Team\EditRequest as EditTeamRequest; 
use App\Models\Student;
use App\Models\School;
use App\Models\Team;

class TeamController extends Controller
{
    public function newTeam(NewTeamRequest $request)
    {
        Team::create($request->all());
        return redirect(route('team.get.index'));
    }

    public function viewTeam($id)
    {
        $team = Team::find($id);
        $studentsSchool = Student::where('school_id', '=', $team->school_id)->get();
        
        $students = Student::where('Team_id', $id)->paginate(10);    
    
        return view('teams.team-team_get_view', ['team' => $team, 'students' => $students, 'studentsSchool' => $studentsSchool]);
    }

    public function editTeam(EditTeamRequest $request, $id)
    {
        $team = Team::find($id);
        $team->update($request->all());
        return redirect(route('team.get.index'));
    }

    public function deleteTeam($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect(route('team.get.index'));
    }    

    public function indexTeam()
    {
        $teams = Team::paginate(10);
        return view('teams.team-team_get_index', ['teams' => $teams]);
    }
    
    public function viewCreateTeam()
    {
        $schools = School::all();
        return view('teams.team-team_get_create', ['schools' => $schools]);
    }
  
    public function viewEditTeam($id)
    {
        $team = Team::find($id);
        $schools = School::all();
        return view('teams.team-team_get_edit', ['team' => $team, 'schools' => $schools]);
    }
}
