<?php


class ItemsTableSeeder extends seeder{

	public function run() {

		DB::table('items')->delete();


        $items= array(


        	array(
        		'owner_id' => 1,
        		'name'=> 'loves Mutura',
        		'done' =>false
        		),
        	array(
        		'owner_id' => 1,
        		'name'=> 'loves Dancing',
        		'done' =>true
        		),
        	array(
        		'owner_id' => 1,
        		'name'=> 'Cook very good food',
        		'done' =>false

        		)
        	);

                DB::table('items') ->insert($items);
        }
}