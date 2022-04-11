<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Intake;
use Faker\Generator as Faker;

$factory->define(Intake::class, function (Faker $faker) {
    return [
        'intakeName' => $faker->monthName,
        'attendanceType' => $faker->word,
        'studyLevel' => $faker->numberBetween(1,5),
        'allowedStage' => $faker->numberBetween(1,3),
        'allowedCourses' => $faker->word,
        'courseRequirements' => $faker->paragraph,
        'intakeStatus' => $faker->numberBetween(0,1),
    ];
});
