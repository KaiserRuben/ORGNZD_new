<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ResultSet;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;



class ListsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function slice($zuZerteilen){
      $Array = explode("; ", $zuZerteilen)
      $count = count($Array);
      for ($i = 0; $i < $count; $i++) {
        $Array2 = explode(", ", $Array[$i)
      }
      return $Array2;
    }
    // Show single Project

    public function list($id){

        $list = DB::table('lists')->where('id', $id)->first();

        $projectid = $list->projectid;

        $project = DB::table('projects')->where('id', $projectid)->first();

        ProjectController::AllowedForThisProject(Auth::id(), $projectid);



        return view('lists.list', ['project' => $project, 'list' => $list]);
    }

    // Create new list

    public function new($projectid){

        ProjectController::AllowedForThisProject(Auth::id(), $projectid);

        $project = DB::table('projects')->where('id', $projectid)->first();

        return view('lists.new', ['projectid' => $projectid, 'projectname' => $project->name, 'projectid' => $projectid]);
    }


    // Save new list

    public function save($projectid, Request $request){

        ProjectController::AllowedForThisProject(Auth::id(), $projectid);

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

    // Edit a List

    public function edit($id){



        $list = DB::table('lists')->where('id', $id)->first();

        $projectid = $list->projectid;

        ProjectController::AllowedForThisProject(Auth::id(), $projectid);

        $project = DB::table('projects')->where('id', $projectid)->first();


        return view('lists.edit', ['list' => $list, 'project' => $project]);
    }


    // Update List

    public function update($id, Request $request)
    {
        $list = DB::table('lists')->where('id', $id)->first();

        $projectid = $list->projectid;

        ProjectController::AllowedForThisProject(Auth::id(), $projectid);

        $name = $request->input('name');
        $type = $request->input('type');
        $description = $request->input('description');
        $value = $request->input('value');
        $duedate = $request->input('duedate');
        $log = date('Y-m-d H:i:s');

        DB::table('lists')->where('id', $id)->update(
        [
            'name' => $name,
            'type' => $type,
            'description' => $description,
            'value' => $value,
            'duedate' => $duedate,
            'log' => $log,
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
