<?php namespace App\Services;

use App\User;
use App\colegio;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		//$colegio = colegio::all();
		return User::create([
			'name' => $data['name'],
			'paterno' => $data['paterno'],
			'materno' => $data['materno'],
			'celular' => $data['celular'],	
			'nacimiento' => $data['nacimiento'],	
			'id_colegio' => $data['id_colegio'],		
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);

		 //compact('colegio') );
	}

}
