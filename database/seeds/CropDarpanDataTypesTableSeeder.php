<?php

use Illuminate\Database\Seeder;

class CropDarpanDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-02-27 18:12:32',
                'updated_at' => '2019-02-27 18:12:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-02-27 18:12:32',
                'updated_at' => '2019-02-27 18:12:32',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-02-27 18:12:32',
                'updated_at' => '2019-02-27 18:12:32',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'crops',
                'slug' => 'crops',
                'display_name_singular' => 'Crop',
                'display_name_plural' => 'Crops',
                'icon' => 'voyager-leaf',
                'model_name' => 'App\\Crop',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-02-27 18:31:24',
                'updated_at' => '2019-02-27 18:31:24',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'cotton_parts',
                'slug' => 'cotton-parts',
                'display_name_singular' => 'Cotton Part',
                'display_name_plural' => 'Cotton Parts',
                'icon' => 'voyager-whale',
                'model_name' => 'App\\CottonPart',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-02-27 18:33:48',
                'updated_at' => '2019-02-27 19:08:28',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'cotton_symptoms',
                'slug' => 'cotton-symptoms',
                'display_name_singular' => 'Cotton Symptom',
                'display_name_plural' => 'Cotton Symptoms',
                'icon' => 'voyager-eye',
                'model_name' => 'App\\CottonSymptom',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-02-27 18:38:38',
                'updated_at' => '2019-02-27 18:39:57',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'cotton_level2_symptoms',
                'slug' => 'cotton-level2-symptoms',
                'display_name_singular' => 'Cotton Level2 Symptom',
                'display_name_plural' => 'Cotton Level2 Symptoms',
                'icon' => 'voyager-sort-desc',
                'model_name' => 'App\\CottonLevel2Symptom',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-02-27 18:46:02',
                'updated_at' => '2019-02-27 18:48:28',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'cotton_level3_symptoms',
                'slug' => 'cotton-level3-symptoms',
                'display_name_singular' => 'Cotton Level3 Symptom',
                'display_name_plural' => 'Cotton Level3 Symptoms',
                'icon' => 'voyager-double-down',
                'model_name' => 'App\\CottonLevel3Symptom',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-02-27 18:48:56',
                'updated_at' => '2019-02-27 18:51:43',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'cotton_problems',
                'slug' => 'cotton-problems',
                'display_name_singular' => 'Cotton Problem',
                'display_name_plural' => 'Cotton Problems',
                'icon' => 'voyager-bug',
                'model_name' => 'App\\CottonProblem',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-02-27 19:17:48',
                'updated_at' => '2019-02-27 19:22:37',
            ),
        ));
        
        
    }
}