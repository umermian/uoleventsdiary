<?php

use Illuminate\Database\Seeder;
use App\Event;


class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        // Event::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Event::create([
                'image' => $faker->image(),
                'name' => $faker->name(),
                'date_time' => $faker->date(),
                'venue' => $faker->address,
                'phone' => $faker->phoneNumber,
                'u_id' => $faker->numberBetween($min=1,$max=11),                
                'o_id' => $faker->numberBetween($min=1,$max=11)
            ]);
        }
    }
}
