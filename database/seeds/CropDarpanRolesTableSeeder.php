<?php

use Illuminate\Database\Seeder;

class CropDarpanRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'expert',
                'display_name' => 'Agricultural Expert',
                'created_at' => '2019-02-27 19:33:23',
                'updated_at' => '2019-02-27 19:33:23',
            ),
        ));
        
        
    }
}