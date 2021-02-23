<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newTag = new Tag();
            $newTag->name = $faker->word();
            $newTag->description = $faker->sentence(6);
            $newTag->save();
        }
    }
}
