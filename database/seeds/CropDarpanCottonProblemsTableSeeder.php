<?php

use Illuminate\Database\Seeder;

class CropDarpanCottonProblemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cotton_problems')->delete();
        
        \DB::table('cotton_problems')->insert(array (
            0 => 
            array (
                'id' => 1,
                'common_name' => 'Problem 1',
                'scientific_name' => 'Scientific Problem 1 ',
                'description' => '<p>dewtghtrrewrfged</p>',
                'advise' => 'erregertgertret',
                'crop_id' => 1,
                'created_at' => '2019-02-27 19:19:00',
                'updated_at' => '2019-02-27 19:23:02',
            ),
        ));
        
        
    }
}