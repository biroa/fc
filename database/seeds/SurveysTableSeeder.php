<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

class SurveysTableSeeder extends Seeder
{
    
    protected $front_end_types = [
        'number', 'date', 'radio', 'dropdown'
    ];
    
    /**
     * Run the database seeds.
     *
     * @param \Faker\Generator $faker
     */
    public function run(Faker $faker)
    {
        
        for ( $i = 0, $length = count($this->front_end_types); $i <= $length-1; $i++ ) {
            DB::table('surveys')->insert([
                'name' => $this->front_end_types[$i],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
