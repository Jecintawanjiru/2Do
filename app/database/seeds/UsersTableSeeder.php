<?php


class UsersTableSeeder extends seeder{

	public function run() {

		DB::table('users')->delete();


        $users = array(

        	array(
        		'name' => 'Loice',
        		'password' => Hash::make('terry'),
        		'email' => 'loisenjoki6@gmail.com'
        		)
        	);

                DB::table('users') ->insert($users);
        }

			
}