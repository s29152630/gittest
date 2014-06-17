<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });


Route::get('/', function()
{
	// $users = DB::table('USER')->get();
	// $users = USER::all();
	//$users = USER::find("dai");Unknown column 'id'

// //新增方式一  要把timestamps設定為false
	// $user = new User;
	// $user->userid = "dai";
	// $user->fullname = "Nacy Dai";
	// $user->save();
// //新增方式二 fillable  
	// USER::create([
	// 	'userid' => 'candy', 
	// 	'fullname' => 'Candy Wu'
	// 	]);

// //更新 save() undefine function???????????????????????
	// $users = USER::where("userid", "=", "dai")->get();
	// foreach ($users as $user) {
	// 	$user->fullname = 'wonderful';
	// 	$user->save();
	// }


	// $user->delete();	undefine function???????????????
	
	$users = USER::all();

	return $users;
});

//被Closures to Controller取代
Route::get('/user', function(){
	$users = USER::all();

	return View::make('userView')->with('users', $users);
	// return View::make('userView')->withUser($users);弄不出來
	// return View::make('userView', ['users', $users]);弄不出來
});


// Route::get('/user/{userid}', function($userid){
// 	$user = USER::where('userid', '=', $userid)->get();
// 	return View::make('userShow')->with('user', $user);
// });






//From Closures to Controllers  被Resource route 取代
// Route::get('/user', 'UserController@index');

//Resource route 如何傳送HTTP Verb
// Route::resource('user', 'UserController');





// Route::get('login', 'SessionController@create');
// Route::get('logout', 'SessionController@destroy');

// Route::resource('sessions', 'SessionController');
