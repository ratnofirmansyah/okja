<?php

use Illuminate\Database\Seeder;

class OutletsTableSeeder extends Seeder
{
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
            ),
        ));
        
        
    }
}