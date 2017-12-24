<?php

use Illuminate\Database\Seeder;
use App\organizer;

class OrganizersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<10; $i++){
        	organizer::create([
        		'name'=>$faker->name,
        		'image'=>$faker->word
        	]);
        }
    }
}
