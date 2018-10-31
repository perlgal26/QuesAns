<?php

use Faker\Generator as Faker;


$factory->define(App\Question::class, function (Faker $faker) {
    return [
         //added sp - for title ==== create  5 to 10 senetence and removw dot as it is a question
        //added sp - for body ==== create paragraph (by default its array) but not as array  but plain sentence which have newline.
        'title' => rtrim($faker->sentence(rand(5,10)),"."),
        'body' => $faker->paragraphs(rand(3,7),true),
        'views' => rand(0,10),
        'answers' => rand(0,10),
        'votes' => rand(-3,10)
       

    ];
});
