<?php

namespace App;

use Faker\Factory;

class BookReader
{
    public static function read() {
        $faker = Factory::create();

        echo $faker->text(2000);
    }
}
