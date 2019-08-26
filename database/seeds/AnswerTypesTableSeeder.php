<?php

use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class AnswerTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param \Faker\Generator $faker
     */
    public function run(Faker $faker)
    {
        for ( $i = 0, $length = 11; $i < $length; $i++ ) {
            DB::table('answer_types')->insert([
                'type' => $faker->name,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
