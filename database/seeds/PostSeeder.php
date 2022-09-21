<?php

use App\Admin\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
// ? preso per lo slug, controlla i docs!
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 50; $i++) { 
            $newpost = new Post();
            $newpost->author = $faker->userName();
            $newpost->title = $faker->realText(35);
            $newpost->post_image = $faker->imageUrl();
            $newpost->post_date = $faker->dateTimeThisYear();
            $newpost->post_content = $faker->paragraphs(5, true);
            $newpost->slug = Str::slug($newpost->title . ' ' . $i, '-' );
            $newpost->save();
        }
    }
}
