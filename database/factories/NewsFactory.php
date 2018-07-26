<?php
$factory->define(App\News::class, function (Faker\Generator $faker) {

    return [
         'title' => $faker->sentences(1, true), 
         'content' => $faker->text(255),
         
    ];
});
?>