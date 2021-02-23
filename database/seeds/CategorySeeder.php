<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* $categories_list = config('categories');

        foreach ($categories_list as $cat) {
            $newCat = new Category();
            $newCat->name = $cat["name"];
            $newCat->description = $cat["description"];
            $newCat->save(); 
        }  */
        
            for ($i=0; $i < 10; $i++) { 
            $newCat = new Category();
            $newCat->name = $faker->word();
            $newCat->description = $faker->sentence(6);
            $newCat->save();
        }
    }
}
