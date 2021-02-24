<?php

use App\Article;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 5; $i++) { 
           $newArt = new Article();
           $newArt->title = $faker->word();
           $newArt->body = $faker->realText($maxNbChars = 200, $indexSize = 2);
           $newArt->save();
       }
    }
}
