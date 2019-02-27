<?php

use Illuminate\Database\Seeder;

class CropDarpanCottonPartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cotton_parts')->delete();
        
        \DB::table('cotton_parts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Leaf',
                'description' => '<h1>This is the <span style="text-decoration: underline;"><strong>leaf</strong></span> part of the cotton crop.</h1>',
                'question' => 'Are there insects in leaf?',
                'image' => 'cotton-parts/February2019/jMN2a08iBE1xIoeYemyf.png',
                'crop_id' => 1,
                'created_at' => '2019-02-27 19:09:00',
                'updated_at' => '2019-02-27 19:13:51',
            ),
        ));
        
        
    }
}