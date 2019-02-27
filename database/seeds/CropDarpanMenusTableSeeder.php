<?php

use Illuminate\Database\Seeder;

class CropDarpanMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
            ),
        ));
        
        
    }
}