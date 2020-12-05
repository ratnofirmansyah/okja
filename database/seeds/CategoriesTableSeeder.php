<?php
use Illuminate\Database\Seeder;
class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('categories')->delete();
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sembako',
                'created_at' => '2020-10-04 05:11:12',
                'updated_at' => '2020-10-04 05:11:12',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Peralatan Mandi',
                'created_at' => '2020-10-04 05:11:40',
                'updated_at' => '2020-10-04 05:11:40',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Peralatan Cuci Pakaian',
                'created_at' => '2020-10-04 05:11:56',
                'updated_at' => '2020-10-04 05:11:56',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Minuman Sachet',
                'created_at' => '2020-10-04 05:12:17',
                'updated_at' => '2020-10-04 05:12:17',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Minuman Siap Konsumsi',
                'created_at' => '2020-10-04 05:12:41',
                'updated_at' => '2020-10-04 05:12:41',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Makanan Ringan',
                'created_at' => '2020-10-04 05:12:57',
                'updated_at' => '2020-10-04 05:12:57',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Perlengkapan Wanita dan Pria',
                'created_at' => '2020-10-04 05:13:22',
                'updated_at' => '2020-10-04 05:13:22',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Peralatan Kebersihan',
                'created_at' => '2020-10-04 05:13:45',
                'updated_at' => '2020-10-04 05:13:45',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Rokok',
                'created_at' => '2020-10-04 05:13:56',
                'updated_at' => '2020-10-04 05:13:56',
            ),
        ));
    }
}