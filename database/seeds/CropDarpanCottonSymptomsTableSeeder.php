<?php

use Illuminate\Database\Seeder;

class CropDarpanCottonSymptomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cotton_symptoms')->delete();
        
        \DB::table('cotton_symptoms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Symptom #1',
                'description' => '<p>This is #1 symptom of leaf part of cotton crop.</p>',
                'question' => 'Random Question',
                'image' => 'cotton-symptoms/February2019/IFc6rr9DUWVZtFaK1s30.png',
                'part_id' => 1,
                'crop_id' => 1,
                'created_at' => '2019-02-27 19:16:11',
                'updated_at' => '2019-02-27 19:16:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Symptom #2',
                'description' => NULL,
                'question' => 'Random Question2',
                'image' => 'cotton-symptoms/February2019/ixtApI7NVN5QNpujTJ3E.png',
                'part_id' => 1,
                'crop_id' => 1,
                'created_at' => '2019-02-27 19:21:54',
                'updated_at' => '2019-02-27 19:21:54',
            ),
        ));
        
        
    }
}