<?php
use Illuminate\Database\Seeder;
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
	$users = array(
		['id'	=> 101, 'first_name' => 'firstname1', 'last_name' => 'lastname1'],
		['id'	=> 102, 'first_name' => 'firstname2', 'last_name' => 'lastname2']
		);
	// Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
 
}
