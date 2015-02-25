<?php namespace App\Http\Controllers;

use Input;
use App\User;
use App\UserCity;
use App\City;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\Request;

class UsersController extends Controller {
	
	protected $rules = [
		'state' => ['required'],
		'city' => ['required'],
	];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$users = User::all();
		return view('users.index', compact('users'));
		//return view('users.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function addUserCity(Request $request)
	{
		//Check if the user is logged in
		$this->validate($request, $this->rules);
 
		$city = City::where('name', '=', Input::get('city'))->where('state','=',Input::get('state'))->first();
		$user = User::where('id', '=', Input::get('user_id'))->first();

		$result = null;
		if($city != null && $user != null){
			// user found
			$usercity = new Usercity;
			$usercity->city_id = $city->id;
			$usercity->user_id = $user->id;
			$result = $usercity->save();
		}
		return [$result];
	}

	public function getUserCity()
	{
		//$usercities = User::where('id','=',1)->first()->usercity()->get();
		
		// all of the cities visited by user 1
		$user = User::find(1);
		$usercities = $user->cities;

		/*$usercities = DB::table('users')
			->join('usercities', 'users.id', '=', 'usercities.user_id')
			->join('cities', 'cities.id', '=', 'usercities.city_id')
			->select('cities.name', 'cities.state')
			->get();*/
		
		return [$usercities->toArray()];
		/*$user = User::where('id', '=', Input::get('user_id'))->first();
		$city = City::where('name', '=', Input::get('city'))->where('state','=',Input::get('state'))->first();
		if($city != null && $user != null){
			
		}*/
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
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
