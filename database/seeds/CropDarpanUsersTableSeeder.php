<?php

use Illuminate\Database\Seeder;

class CropDarpanUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uDpbPoJiGBITuvrhHRJSEOZ7.7HopIbOpN9GLfkVATdoezQ6ypdGu',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2019-02-27 18:13:12',
                'updated_at' => '2019-02-27 18:13:12',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'Expert',
                'email' => 'expert@expert.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pQKT4y.lmwOVTvUArRbDruQJGddSjD5qUCWb/P07ilpghVIzaOX2e',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2019-02-27 19:33:53',
                'updated_at' => '2019-02-27 19:33:53',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'User',
                'email' => 'user@user.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MsDa0Z11.9SJTJFRL14UMuI9b6hJOQR6lIjqmX1Dh/NDsjHSi4AhS',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2019-02-27 19:50:05',
                'updated_at' => '2019-02-27 19:50:05',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Farmer',
                'email' => 'farmer@farmer.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$By6rIeS9o3Mr.34T/F0J8O17PKZLxGW1LJ5DzSWIy/6oQmtVeV0c6',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2019-02-27 19:52:02',
                'updated_at' => '2019-02-27 19:52:02',
            ),
        ));
        
        
    }
}