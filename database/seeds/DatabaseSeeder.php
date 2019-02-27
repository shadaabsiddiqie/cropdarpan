<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CropDarpanDataRowsTableSeeder::class);
        $this->call(CropDarpanDataTypesTableSeeder::class);
        $this->call(CropDarpanMenusTableSeeder::class);
        $this->call(CropDarpanMenuItemsTableSeeder::class);
        $this->call(CropDarpanPermissionsTableSeeder::class);
        $this->call(CropDarpanRolesTableSeeder::class);
        $this->call(CropDarpanSettingsTableSeeder::class);
        $this->call(CropDarpanTranslationsTableSeeder::class);
        $this->call(CropDarpanUserRolesTableSeeder::class);
        $this->call(CropDarpanUsersTableSeeder::class);
        $this->call(CropDarpanCropsTableSeeder::class);
        $this->call(CropDarpanCottonPartsTableSeeder::class);
        $this->call(CropDarpanCottonSymptomsTableSeeder::class);
        $this->call(CropDarpanCottonProblemsTableSeeder::class);
        $this->call(CropDarpanCottonLevel2SymptomsTableSeeder::class);
        $this->call(CropDarpanCottonLevel3SymptomsTableSeeder::class);
        $this->call(CropDarpanCottonProblemSymptomsTableSeeder::class);
    }
}
