<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$users = USER::all();

		return View::make('userView')->with('user', $users);	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userCreate');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $validation = Validator::make(Input::all(), ['userid'=>'required', 'fullname'=>'required']);
		// $validation = Validator::make(Input::all(), User::$rules);
		// if($validation->fails()){
		// 	return Redirect::back()->withInput()->withErrors($validation->messages());
		// }
		if( ! User::isValid(Input::all())){
			return Redirect::back()->withInput()->withErrors(User::$error);
		}
		
			$user = new User();
			$user->userid = Input::get('userid');
			$user->fullname = Input::get('fullname');
			$user->save();
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


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
