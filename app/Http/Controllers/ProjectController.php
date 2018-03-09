<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ResultSet;
use Illuminate\Support\Facades\Input;



class ProjectController extends Controller
{
    

    // Show all projects

    public function index(){
        
        $projects = DB::table('projects')->get();

        $countallprojects = DB::table('projects')->count();
        

        return view('projects.index', ['projects' => $projects, 'count' => $countallprojects ]);
    }


    // Show single Project

    public function project($id){

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

        $name = $request->input('name');
        $type = $request->input('type');
        $description = $request->input('description');
        $duedate = $request->input('duedate');
        $log = date('Y-m-d H:i:s');
        $created = date('Y-m-d H:i:s');

        $id = DB::table('projects')->insertGetId(
        [
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

        $project = DB::table('projects')->where('id', $id)->first();

        
        return view('projects.edit', ['project' => $project]);
    }


    // Update project

    public function update($id, Request $request)
    {
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
        DB::table('projects')->where('id', $id)->delete();
        return redirect('/');
    }
}