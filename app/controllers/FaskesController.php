<?php

class FaskesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$input = Input::only(
			'branch',
			'kabupaten',
			'kecamatan',
			'address',
			'name',
			'class',
			'layanan'
		);

		$query = DB::table('api_faskes');
		if ($input['layanan'] != null)
		{
			$query = $query
				->join('api_layanan_faskes', 'api_faskes.id', '=', 'api_layanan_faskes.faskes_id')
				->join('api_layanan', 'api_layanan.id', '=', 'api_layanan_faskes.layanan_id')
				->where('api_layanan.nama', 'like', "%$input[layanan]%");
		}

		if ($input['branch'] != null)
		{
			$query = $query->where('branch', 'like', "%$input[branch]%");
		}

		if ($input['kabupaten'] != null)
		{
			$query = $query->where('kabupaten', 'like', "%$input[kabupaten]%");
		}

		if ($input['kecamatan'] != null)
		{
			$query = $query->where('kecamatan', 'like', "%$input[kecamatan]%");
		}

		if ($input['address'] != null)
		{
			$query = $query->where('address', 'like', "%$input[address]%");
		}

		if ($input['name'] != null)
		{
			$query = $query->where('name', 'like', "%$input[name]%");
		}

		if ($input['class'] != null)
		{
			$query = $query->where('class', 'like', "%$input[class]%");
		}
		$query = $query->get();

		return Response::json($query);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$faskes = Faskes::find($id);
		return Response::json($faskes);
	}

	public function getLayanan($id) {
		$layanan = Faskes::find($id)->layanan;
		return Response::json($layanan);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function edit($id)
	// {
	// 	//
	// }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
