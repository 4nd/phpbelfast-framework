<?php
require "setup.php";

use RedBean_Facade as R;

$faker = Faker\Factory::create();

R::nuke();

foreach (range(1, 20) as $idx) {
    $post = R::dispense('post');
    $post->title = $faker->name() . ' ' . $faker->catchphrase();
    $post->date = $faker->dateTimeThisMonth();
    $post->summary = $faker->paragraph();

    $cats = ['abstract', 'animals', 'business', 'cats', 'city', 'food',
        'nightlife', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    $category = $faker->randomElement($cats);
    $post->image = $faker->imageUrl(300, 200, $category);

    R::store($post);
}


