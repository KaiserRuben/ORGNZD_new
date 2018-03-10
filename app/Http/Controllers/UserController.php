<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ResultSet;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
	public function logout(){
		Auth::logout();
		return redirect('/');
	}

	public function settings(){

		$user = DB::table('users')->where('id', Auth::id())->first();

		return view('users.settings', ['user' => $user]);
	}

	public function update(){

	}

	public function warning(){

	}

	public function delete(){

	}

}