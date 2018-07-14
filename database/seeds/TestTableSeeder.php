<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
        	[
        		'name' => 'Alex',
        	],
        	[
        		'name' => 'Ivan'
        	],
        	[
        		'name' => 'Peter'
        	],
        	[
        		'name' => 'Sveta'
        	],
        	[
        		'name' => 'Test Name'
        	],
        	[
        		'name' => 'Nick'
        	],
        	[
        		'name' => null
        	],
        ];

        foreach ($names as $name) {
        	DB::table('test')->insert($name);
        }
    }
}
