<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\MeiMail::class, function (Faker\Generator $faker) {
    $body = $faker->realText($maxNbChars = 600, $indexSize = 2);
    return [
        'recipient'             => $faker->email,
        'sender'                => $faker->email,
        'from'                  => $faker->name,
        'subject'               => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'body_plain'            => $body,
        'stripped_text'         => $body,
        'stripped_signature'    => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'body_html'             => '<html><h3>'.$body.'</h3></html>',
        'stripped_html'         => $body,
        'attachments'           => 2,
        'timestamp'             => $faker->dateTimeAD($max = 'now') ,
        'token'                 => $faker->bothify('##?#??#????#?#?#???#??#???###'),
        'signature'             => $faker->name,
        'message_headers'       => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'content_id_map'        => $faker->realText($maxNbChars = 100, $indexSize = 2),
    ];
});

