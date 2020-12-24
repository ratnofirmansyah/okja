<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OutletsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('outlets')->delete();
        
        \DB::table('outlets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'brand_id' => 1,
                'name' => 'Firman Sembako Karangmojo',
                'address' => 'Jl. Karangmojo, Karangmojo, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584',
                'latitude' => '-7.728212',
                'longitude' => '110.416504',
                'created_at' => '2020-10-04 05:10:49',
                'updated_at' => '2020-10-04 05:10:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'brand_id' => 2,
                'name' => 'Rangga Sembako Mlati',
                'address' => 'Mlati Sleman Yogyakarta',
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => '2020-12-23 21:00:45',
                'updated_at' => '2020-12-23 21:00:45',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'brand_id' => 1,
                'name' => 'Firman Sembako Klipang',
                'address' => 'Klipang Semarang Jawa Tengah',
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => '2020-12-24 13:25:30',
                'updated_at' => '2020-12-24 13:25:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}