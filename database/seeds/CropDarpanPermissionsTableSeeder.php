<?php

use Illuminate\Database\Seeder;

class CropDarpanPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-02-27 18:12:34',
                'updated_at' => '2019-02-27 18:12:34',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-02-27 18:12:35',
                'updated_at' => '2019-02-27 18:12:35',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-02-27 18:12:35',
                'updated_at' => '2019-02-27 18:12:35',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-27 18:12:35',
                'updated_at' => '2019-02-27 18:12:35',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-27 18:12:35',
                'updated_at' => '2019-02-27 18:12:35',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-27 18:12:35',
                'updated_at' => '2019-02-27 18:12:35',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-27 18:12:35',
                'updated_at' => '2019-02-27 18:12:35',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-27 18:12:35',
                'updated_at' => '2019-02-27 18:12:35',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-02-27 18:12:37',
                'updated_at' => '2019-02-27 18:12:37',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_crops',
                'table_name' => 'crops',
                'created_at' => '2019-02-27 18:31:24',
                'updated_at' => '2019-02-27 18:31:24',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_crops',
                'table_name' => 'crops',
                'created_at' => '2019-02-27 18:31:24',
                'updated_at' => '2019-02-27 18:31:24',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_crops',
                'table_name' => 'crops',
                'created_at' => '2019-02-27 18:31:24',
                'updated_at' => '2019-02-27 18:31:24',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_crops',
                'table_name' => 'crops',
                'created_at' => '2019-02-27 18:31:24',
                'updated_at' => '2019-02-27 18:31:24',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_crops',
                'table_name' => 'crops',
                'created_at' => '2019-02-27 18:31:24',
                'updated_at' => '2019-02-27 18:31:24',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_cotton_parts',
                'table_name' => 'cotton_parts',
                'created_at' => '2019-02-27 18:33:48',
                'updated_at' => '2019-02-27 18:33:48',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_cotton_parts',
                'table_name' => 'cotton_parts',
                'created_at' => '2019-02-27 18:33:48',
                'updated_at' => '2019-02-27 18:33:48',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_cotton_parts',
                'table_name' => 'cotton_parts',
                'created_at' => '2019-02-27 18:33:48',
                'updated_at' => '2019-02-27 18:33:48',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_cotton_parts',
                'table_name' => 'cotton_parts',
                'created_at' => '2019-02-27 18:33:48',
                'updated_at' => '2019-02-27 18:33:48',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_cotton_parts',
                'table_name' => 'cotton_parts',
                'created_at' => '2019-02-27 18:33:48',
                'updated_at' => '2019-02-27 18:33:48',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_cotton_symptoms',
                'table_name' => 'cotton_symptoms',
                'created_at' => '2019-02-27 18:38:38',
                'updated_at' => '2019-02-27 18:38:38',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_cotton_symptoms',
                'table_name' => 'cotton_symptoms',
                'created_at' => '2019-02-27 18:38:38',
                'updated_at' => '2019-02-27 18:38:38',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_cotton_symptoms',
                'table_name' => 'cotton_symptoms',
                'created_at' => '2019-02-27 18:38:38',
                'updated_at' => '2019-02-27 18:38:38',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_cotton_symptoms',
                'table_name' => 'cotton_symptoms',
                'created_at' => '2019-02-27 18:38:38',
                'updated_at' => '2019-02-27 18:38:38',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_cotton_symptoms',
                'table_name' => 'cotton_symptoms',
                'created_at' => '2019-02-27 18:38:38',
                'updated_at' => '2019-02-27 18:38:38',
            ),
            41 => 
            array (
                'id' => 47,
                'key' => 'browse_cotton_level2_symptoms',
                'table_name' => 'cotton_level2_symptoms',
                'created_at' => '2019-02-27 18:46:02',
                'updated_at' => '2019-02-27 18:46:02',
            ),
            42 => 
            array (
                'id' => 48,
                'key' => 'read_cotton_level2_symptoms',
                'table_name' => 'cotton_level2_symptoms',
                'created_at' => '2019-02-27 18:46:02',
                'updated_at' => '2019-02-27 18:46:02',
            ),
            43 => 
            array (
                'id' => 49,
                'key' => 'edit_cotton_level2_symptoms',
                'table_name' => 'cotton_level2_symptoms',
                'created_at' => '2019-02-27 18:46:02',
                'updated_at' => '2019-02-27 18:46:02',
            ),
            44 => 
            array (
                'id' => 50,
                'key' => 'add_cotton_level2_symptoms',
                'table_name' => 'cotton_level2_symptoms',
                'created_at' => '2019-02-27 18:46:02',
                'updated_at' => '2019-02-27 18:46:02',
            ),
            45 => 
            array (
                'id' => 51,
                'key' => 'delete_cotton_level2_symptoms',
                'table_name' => 'cotton_level2_symptoms',
                'created_at' => '2019-02-27 18:46:02',
                'updated_at' => '2019-02-27 18:46:02',
            ),
            46 => 
            array (
                'id' => 52,
                'key' => 'browse_cotton_level3_symptoms',
                'table_name' => 'cotton_level3_symptoms',
                'created_at' => '2019-02-27 18:48:56',
                'updated_at' => '2019-02-27 18:48:56',
            ),
            47 => 
            array (
                'id' => 53,
                'key' => 'read_cotton_level3_symptoms',
                'table_name' => 'cotton_level3_symptoms',
                'created_at' => '2019-02-27 18:48:56',
                'updated_at' => '2019-02-27 18:48:56',
            ),
            48 => 
            array (
                'id' => 54,
                'key' => 'edit_cotton_level3_symptoms',
                'table_name' => 'cotton_level3_symptoms',
                'created_at' => '2019-02-27 18:48:56',
                'updated_at' => '2019-02-27 18:48:56',
            ),
            49 => 
            array (
                'id' => 55,
                'key' => 'add_cotton_level3_symptoms',
                'table_name' => 'cotton_level3_symptoms',
                'created_at' => '2019-02-27 18:48:56',
                'updated_at' => '2019-02-27 18:48:56',
            ),
            50 => 
            array (
                'id' => 56,
                'key' => 'delete_cotton_level3_symptoms',
                'table_name' => 'cotton_level3_symptoms',
                'created_at' => '2019-02-27 18:48:56',
                'updated_at' => '2019-02-27 18:48:56',
            ),
            51 => 
            array (
                'id' => 57,
                'key' => 'browse_cotton_problems',
                'table_name' => 'cotton_problems',
                'created_at' => '2019-02-27 19:17:48',
                'updated_at' => '2019-02-27 19:17:48',
            ),
            52 => 
            array (
                'id' => 58,
                'key' => 'read_cotton_problems',
                'table_name' => 'cotton_problems',
                'created_at' => '2019-02-27 19:17:48',
                'updated_at' => '2019-02-27 19:17:48',
            ),
            53 => 
            array (
                'id' => 59,
                'key' => 'edit_cotton_problems',
                'table_name' => 'cotton_problems',
                'created_at' => '2019-02-27 19:17:48',
                'updated_at' => '2019-02-27 19:17:48',
            ),
            54 => 
            array (
                'id' => 60,
                'key' => 'add_cotton_problems',
                'table_name' => 'cotton_problems',
                'created_at' => '2019-02-27 19:17:48',
                'updated_at' => '2019-02-27 19:17:48',
            ),
            55 => 
            array (
                'id' => 61,
                'key' => 'delete_cotton_problems',
                'table_name' => 'cotton_problems',
                'created_at' => '2019-02-27 19:17:48',
                'updated_at' => '2019-02-27 19:17:48',
            ),
        ));
        
        
    }
}