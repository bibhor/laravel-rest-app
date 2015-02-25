<?php
use Illuminate\Database\Seeder;
 
class UsercitiesTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('usercities')->delete();
 
	$users = array(
		['userid' => 101, 'cityid' => '101'],
		['userid' => 101, 'cityid' => '102']
		);
	// Uncomment the below to run the seeder
        DB::table('usercities')->insert($users);
    }
 
}
