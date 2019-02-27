<?php

use Illuminate\Database\Seeder;

class CropDarpanCropsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crops')->delete();
        
        \DB::table('crops')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cotton',
                'description' => '<h1><strong>This is cotton crop</strong></h1>',
                'image' => 'crops/February2019/8QG8Jf6MEiGAk4mUOtP3.jpg',
                'created_at' => '2019-02-27 19:07:00',
                'updated_at' => '2019-02-27 19:11:00',
            ),
        ));
        
        
    }
}