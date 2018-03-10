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

    public function AllowedForThisProject($userid, $projectid){
        $project = DB::table('projects')->where('id', $projectid)->first();

        if($userid !== $project->userid ){
            echo 'Kein Zugriff!';
            exit(1);
        }
    }

    // Show all projects

    public function index(){

        $userid = Auth::id();
        
        $projects = DB::table('projects')->where('userid', $userid)->orderBy('duedate', 'asc')->get();

        $countallprojects = DB::table('projects')->count();
        

        return view('projects.start', ['projects' => $projects, 'count' => $countallprojects ]);
    }


    // Show single Project

    public function project($id){

        
        ProjectController::AllowedForThisProject(Auth::id(), $id);


        $project = DB::table('projects')->where('id', $id)->first();

        $lists = DB::table('lists')->where('projectid', $id)->get();


        
        return view('projects.project', ['project' => $project, 'lists' => $lists]);
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