<?php
use Illuminate\Database\Seeder;
 
class CityTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('cities')->delete();
 
	$cities = array(
		['id'	=> 101, 'name' => 'city1', 'status' => 'saved', 'latitude' => 'lat1', 'longitude' => 'lon1'],
		['id'	=> 102, 'name' => 'city2', 'status' => 'saved', 'latitude' => 'lat2', 'longitude' => 'lon2']
		);
	// Uncomment the below to run the seeder
        DB::table('cities')->insert($cities);
    }
 
}
