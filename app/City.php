<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

	//
	protected $table = 'cities';

	protected $fillable = ['name', 'status', 'latitude', 'longitude'];
	
	public function usercity()
	{
		return $this->belongsToMany('App\User', 'usercity');
		//return $this->hasMany('App\UserCity');
	}
}
