<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ResultSet;
use Illuminate\Support\Facades\Input;



class UserController extends Controller
{
	public function login(){

	}

	public function check($email, $password){
		
		$user = DB::table('projects')->where('email', $email)->first();

		if($user && $user->password == $password){

			$request->session()->put('userid', $user->value);
			redirect('/');

		}else{

			redirect('/login/wrongData');
			exit(1);

		}

	}

	public function register(){

		
	}

	public function save(){

	}

	public function edit(){

	}

	public function update(){

	}

	public function resetSendEmail(){

	}

	public function resetChoosePassword(){

	}

	public function resetUpdatePassword(){

	}

}