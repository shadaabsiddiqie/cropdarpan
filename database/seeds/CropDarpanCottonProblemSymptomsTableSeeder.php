<?php

use Illuminate\Database\Seeder;

class CropDarpanCottonProblemSymptomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cotton_problem_symptoms')->delete();
        
        \DB::table('cotton_problem_symptoms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cotton_problem_id' => 1,
                'cotton_symptom_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'cotton_problem_id' => 1,
                'cotton_symptom_id' => 2,
            ),
        ));
        
        
    }
}