<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ResultSet;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;



class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function AllowedForThisProject($userid, $projectid){
        $project = DB::table('projects')->where('id', $projectid)->first();

        if($userid !== $project->userid ){
            echo 'Kein Zugriff!';
            exit(1);
        }
    }

    // Calculate the difference between two dates

    public static function DateTimeLeft($datetime){
        
        $actualdate = date('Y-m-d H:i:s');

        $date1 = date_create($datetime);
        $date2 = date_create($actualdate);

        //difference between two dates
        $diff = date_diff($date1,$date2);

        //count days
        $newdate = 'Noch '.$diff->format("%a").' Tage';

        return $newdate;
    }

    // Show all projects

    public function index(){

        $userid = Auth::id();
        
        $projects = DB::table('projects')->where('userid', $userid)->orderBy('duedate', 'asc')->get();

        $countallprojects = DB::table('projects')->where('userid', $userid)->count();

        foreach ($projects as $project) {
            $project->duedate = ProjectController::DateTimeLeft($project->duedate);
        }
        

        return view('projects.start', ['projects' => $projects, 'count' => $countallprojects ]);
    }


    // Show single Project

    public function project($id){

        
        ProjectController::AllowedForThisProject(Auth::id(), $id);


        $project = DB::table('projects')->where('id', $id)->first();

        $project->duedate = ProjectController::DateTimeLeft($project->duedate);

        $lists = DB::table('lists')->where('projectid', $id)->get();

        $listscount = DB::table('lists')->where('projectid', $id)->count();


        
        return view('projects.project', ['project' => $project, 'lists' => $lists, 'listscount' => $listscount]);
    }


    // Create new project

    public function new(){

        return view('projects.new');
    }


    // Save new project

    public function save(Request $request){

        $userid = Auth::id();

        $name = $request->input('name');
        $type = $request->input('type');
        $description = $request->input('description');
        $duedate = $request->input('duedate');
        $log = date('Y-m-d H:i:s');
        $created = date('Y-m-d H:i:s');

        $id = DB::table('projects')->insertGetId(
        [
            'userid' => $userid,
            'name' => $name, 
            'type' => $type,
            'description' => $description,
            'duedate' => $duedate,
            'log' => $log,
            'created' => $created,
        ]
        );


        return redirect('/project/'.$id.'/');
        
    }


    // Edit a Project

    public function edit($id){

        ProjectController::AllowedForThisProject(Auth::id(), $id);

        $project = DB::table('projects')->where('id', $id)->first();

        
        return view('projects.edit', ['project' => $project]);
    }


    // Update project

    public function update($id, Request $request)
    {
        ProjectController::AllowedForThisProject(Auth::id(), $id);

        $name = $request->input('name');
        $type = $request->input('type');
        $description = $request->input('description');
        $duedate = $request->input('duedate');
        $log = date('Y-m-d H:i:s');

        DB::table('projects')->where('id', $id)->update(
        [
            'name' => $name, 
            'type' => $type,
            'description' => $description,
            'duedate' => $duedate,
            'log' => $log,
        ]
        );


        return redirect('/project/'.$id.'/');
    } 


    // Delete a Project

    public function delete($id){

        ProjectController::AllowedForThisProject(Auth::id(), $id);

        
        DB::table('projects')->where('id', $id)->delete();
        return redirect('/');
    }
}