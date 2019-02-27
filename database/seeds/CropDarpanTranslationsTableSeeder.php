<?php

use Illuminate\Database\Seeder;

class CropDarpanTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_name' => 'crops',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'te',
                'value' => 'పత్తి',
                'created_at' => '2019-02-27 19:07:29',
                'updated_at' => '2019-02-27 19:11:00',
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'crops',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:07:29',
                'updated_at' => '2019-02-27 19:07:29',
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 5,
                'locale' => 'te',
                'value' => 'Cotton Part',
                'created_at' => '2019-02-27 19:08:28',
                'updated_at' => '2019-02-27 19:08:28',
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 5,
                'locale' => 'hi',
                'value' => 'Cotton Part',
                'created_at' => '2019-02-27 19:08:28',
                'updated_at' => '2019-02-27 19:08:28',
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 5,
                'locale' => 'te',
                'value' => 'Cotton Parts',
                'created_at' => '2019-02-27 19:08:28',
                'updated_at' => '2019-02-27 19:08:28',
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 5,
                'locale' => 'hi',
                'value' => 'Cotton Parts',
                'created_at' => '2019-02-27 19:08:28',
                'updated_at' => '2019-02-27 19:08:28',
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'cotton_parts',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'te',
                'value' => 'ఆకు',
                'created_at' => '2019-02-27 19:09:47',
                'updated_at' => '2019-02-27 19:13:51',
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'cotton_parts',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:09:47',
                'updated_at' => '2019-02-27 19:09:47',
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'cotton_parts',
                'column_name' => 'question',
                'foreign_key' => 1,
                'locale' => 'te',
                'value' => 'ఆకులో కీటకాలు ఉన్నాయా?',
                'created_at' => '2019-02-27 19:09:47',
                'updated_at' => '2019-02-27 19:13:51',
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'cotton_parts',
                'column_name' => 'question',
                'foreign_key' => 1,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:09:47',
                'updated_at' => '2019-02-27 19:09:47',
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'cotton_symptoms',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'te',
                'value' => '',
                'created_at' => '2019-02-27 19:16:11',
                'updated_at' => '2019-02-27 19:16:11',
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'cotton_symptoms',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:16:12',
                'updated_at' => '2019-02-27 19:16:12',
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'cotton_symptoms',
                'column_name' => 'question',
                'foreign_key' => 1,
                'locale' => 'te',
                'value' => 'యాదృచ్ఛిక ప్రశ్న',
                'created_at' => '2019-02-27 19:16:12',
                'updated_at' => '2019-02-27 19:16:12',
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'cotton_symptoms',
                'column_name' => 'question',
                'foreign_key' => 1,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:16:12',
                'updated_at' => '2019-02-27 19:16:12',
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 10,
                'locale' => 'te',
                'value' => 'Cotton Problem',
                'created_at' => '2019-02-27 19:18:21',
                'updated_at' => '2019-02-27 19:18:21',
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 10,
                'locale' => 'hi',
                'value' => 'Cotton Problem',
                'created_at' => '2019-02-27 19:18:21',
                'updated_at' => '2019-02-27 19:18:21',
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 10,
                'locale' => 'te',
                'value' => 'Cotton Problems',
                'created_at' => '2019-02-27 19:18:21',
                'updated_at' => '2019-02-27 19:18:21',
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 10,
                'locale' => 'hi',
                'value' => 'Cotton Problems',
                'created_at' => '2019-02-27 19:18:21',
                'updated_at' => '2019-02-27 19:18:21',
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'cotton_problems',
                'column_name' => 'common_name',
                'foreign_key' => 1,
                'locale' => 'te',
                'value' => '',
                'created_at' => '2019-02-27 19:19:03',
                'updated_at' => '2019-02-27 19:19:03',
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'cotton_problems',
                'column_name' => 'common_name',
                'foreign_key' => 1,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:19:03',
                'updated_at' => '2019-02-27 19:19:03',
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'cotton_problems',
                'column_name' => 'scientific_name',
                'foreign_key' => 1,
                'locale' => 'te',
                'value' => '',
                'created_at' => '2019-02-27 19:19:03',
                'updated_at' => '2019-02-27 19:19:03',
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'cotton_problems',
                'column_name' => 'scientific_name',
                'foreign_key' => 1,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:19:03',
                'updated_at' => '2019-02-27 19:19:03',
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'cotton_problems',
                'column_name' => 'advise',
                'foreign_key' => 1,
                'locale' => 'te',
                'value' => '',
                'created_at' => '2019-02-27 19:19:03',
                'updated_at' => '2019-02-27 19:19:03',
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'cotton_problems',
                'column_name' => 'advise',
                'foreign_key' => 1,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:19:04',
                'updated_at' => '2019-02-27 19:19:04',
            ),
            24 => 
            array (
                'id' => 25,
                'table_name' => 'cotton_symptoms',
                'column_name' => 'name',
                'foreign_key' => 2,
                'locale' => 'te',
                'value' => '',
                'created_at' => '2019-02-27 19:21:54',
                'updated_at' => '2019-02-27 19:21:54',
            ),
            25 => 
            array (
                'id' => 26,
                'table_name' => 'cotton_symptoms',
                'column_name' => 'name',
                'foreign_key' => 2,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:21:54',
                'updated_at' => '2019-02-27 19:21:54',
            ),
            26 => 
            array (
                'id' => 27,
                'table_name' => 'cotton_symptoms',
                'column_name' => 'question',
                'foreign_key' => 2,
                'locale' => 'te',
                'value' => '',
                'created_at' => '2019-02-27 19:21:54',
                'updated_at' => '2019-02-27 19:21:54',
            ),
            27 => 
            array (
                'id' => 28,
                'table_name' => 'cotton_symptoms',
                'column_name' => 'question',
                'foreign_key' => 2,
                'locale' => 'hi',
                'value' => '',
                'created_at' => '2019-02-27 19:21:55',
                'updated_at' => '2019-02-27 19:21:55',
            ),
        ));
        
        
    }
}