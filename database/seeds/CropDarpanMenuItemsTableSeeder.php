<?php

use Illuminate\Database\Seeder;

class CropDarpanMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 10,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 11,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 12,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 13,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2019-02-27 18:12:33',
                'updated_at' => '2019-02-27 18:12:33',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 13,
                'created_at' => '2019-02-27 18:12:37',
                'updated_at' => '2019-02-27 18:12:37',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Crops',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-leaf',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 15,
                'created_at' => '2019-02-27 18:31:24',
                'updated_at' => '2019-02-27 18:31:24',
                'route' => 'voyager.crops.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Cotton Parts',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-whale',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 16,
                'created_at' => '2019-02-27 18:33:48',
                'updated_at' => '2019-02-27 18:37:11',
                'route' => 'voyager.cotton-parts.index',
                'parameters' => 'null',
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Cotton Symptoms',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-eye',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 17,
                'created_at' => '2019-02-27 18:38:38',
                'updated_at' => '2019-02-27 18:38:38',
                'route' => 'voyager.cotton-symptoms.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Cotton Level2 Symptoms',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-sort-desc',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 19,
                'created_at' => '2019-02-27 18:46:02',
                'updated_at' => '2019-02-27 18:46:02',
                'route' => 'voyager.cotton-level2-symptoms.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Cotton Level3 Symptoms',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-double-down',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 20,
                'created_at' => '2019-02-27 18:48:56',
                'updated_at' => '2019-02-27 18:48:56',
                'route' => 'voyager.cotton-level3-symptoms.index',
                'parameters' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Cotton Problems',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bug',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 21,
                'created_at' => '2019-02-27 19:17:48',
                'updated_at' => '2019-02-27 19:17:48',
                'route' => 'voyager.cotton-problems.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}