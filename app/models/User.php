<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

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
	protected $hidden = array('password');

	// Define relationship to posts
	public function posts() 
	{
		return $this->hasMany('Post');

	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	// Set username to lower case on save
	public function setUsernameAttribute($value) 
	{
		$this->attributes['username'] = strtolower($value);
	}

	public function setPasswordAttribute($value) 
	{
		$this->attributes['password'] = Hash::make($value);
	}

	public function setFirstNameAttribute($value)
	{
		$this->attributes['first_name'] = strtolower($value);
	}

	public function setLastNameAttribute($value)
	{
		$this->attributes['last_name'] = strtolower($value);
	}

	public function getFirstNameAttribute()
	{
		return ucfirst($this->attributes['first_name']);
	}

	public function getLastNameAttribute()
	{
		return ucfirst($this->attributes['last_name']);
	}

}