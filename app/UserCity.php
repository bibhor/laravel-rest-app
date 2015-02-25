<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCity extends Model {

	protected $table = 'usercities';
	protected $fillable = ['user_id', 'city_id'];
	public $timestamps = false;
	
	public function city()
	{
		return $this->belongsTo('App\City');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
