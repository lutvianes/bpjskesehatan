<?php

class UserController extends \BaseController {

	// /**
	//  * Display a listing of the resource.
	//  *
	//  * @return Response
	//  */
	// public function index()
	// {
	// 	return "string";
	// }


	// /**
	//  * Show the form for creating a new resource.
	//  *
	//  * @return Response
	//  */
	// public function create()
	// {

	// }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only(
			'password',
			'no_ktp',
			'nama',
			'email',
			'alamat',
			'jenis_kelamin',
			'kelas'
		);
		$validator = Validator::make(
			array(
				'name' => $input['nama'],
				'no_ktp'	=> $input['no_ktp'],
				'password' => $input['password'],
				'email' => $input['email']
			),
			array(
				'name' => 'required',
				'no_ktp'	=> 'required',
				'password' => 'required|min:5',
				'email' => 'required|email|unique:api_users'
			)
		);

		$response = array(
			'error_messages'	=> array()
		);

		if ($validator->passes())
		{
			$user = new UserBpjs();
			foreach ($input as $key => $value) {
				if ($key != 'password')
				{
					if ($value != null)
						$user->{"$key"} = $value;
				} else {
					$user->password = Hash::make($input['password']);
				}
			}
			$user->no_bpjs = '2605P0514'.substr(md5(microtime()),rand(0,26),5);
			$user->save();

			return Response::json($user);
		} else {
			$messages = $validator->messages();
			foreach ($messages->all() as $messages) {
				$response['error_messages'][] = $messages;
			}
			return Response::json($response);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = UserBpjs::find($id);
		return Response::json($user);
	}


	// /**
	//  * Show the form for editing the specified resource.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function edit($id)
	// {

	// }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::only(
			'password',
			'no_ktp',
			'nama',
			'email',
			'alamat',
			'jenis_kelamin',
			'kelas'
		);
		$user = UserBpjs::find($id);
		foreach ($input as $key => $value) {
			if ($value != null)
			{
				$user->{"$key"} = $value;
			}
		}
		$user->save();
		return Response::json($user);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function destroy($id)
	// {
	// 	//
	// }


}
