<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ResultSet;
use Illuminate\Support\Facades\Input;



class ListsController extends Controller
{

    // Show single Project

    public function list($id){

        $list = DB::table('lists')->where('id', $id)->first();

        $projectid = $list->projectid;

        $project = DB::table('projects')->where('id', $projectid)->first();


        
        return view('lists.list', ['project' => $project, 'list' => $list]);
    }

    // Create new list

    public function new($projectid){

        $project = DB::table('projects')->where('id', $projectid)->first();

        return view('lists.new', ['projectid' => $projectid, 'projectname' => $project->name, 'projectid' => $projectid]);
    }


    // Save new list

    public function save($projectid, Request $request){

        $projectid = $projectid;
        $name = $request->input('name');
        $type = $request->input('type');
        $description = $request->input('description');
        $value = $request->input('value');
        $duedate = $request->input('duedate');
        $log = date('Y-m-d H:i:s');
        $created = date('Y-m-d H:i:s');

        $id = DB::table('lists')->insertGetId(
        [
            'projectid' => $projectid,
            'name' => $name, 
            'type' => $type,
            'description' => $description,
            'value' => $value,
            'duedate' => $duedate,
            'log' => $log,
            'created' => $created,
        ]
        );


        return redirect('/list/'.$id.'/');
        
    }

    // Delete a List

    public function delete($id){
        
        $list = DB::table('lists')->where('id', $id)->first();

        $projectid = $list->projectid;

        $project = DB::table('projects')->where('id', $projectid)->value('id');

        DB::table('lists')->where('id', $id)->delete();
        return redirect('/project/'.$project);
    }

    

}