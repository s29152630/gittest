<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	public $timestamps = false;

	protected $fillable = ['userid', 'fullname'];

	public static $rules = [
		'userid' => 'required',
		'fullname' => 'required'
	];

	public static $error;
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function isValid($data){
		$validation = Validator::make($data, static::$rules);

		if($validation->passes()) return true; 

		static::$error = $validation->messages();
		return false;
	}
}


