<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

Class User extends Model {
//class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	//use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['firstname', 'lastname'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = ['password', 'remember_token'];
	
	public function usercity()
	{
		return $this->belongsToMany('App\City', 'usercity', 'city_id', 'id');
		//return $this->hasMany('App\UserCity');
	}

	public function cities()
	{
		return $this->hasManyThrough('App\City', 'App\UserCity', 'city_id', 'id');
	}
}
