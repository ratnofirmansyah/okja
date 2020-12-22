<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Firman Sembako',
                'avatar' => 'brands\\October2020\\ABDnq48lhZFoCDc794WL.jpg',
                'url' => 'https://firmansembako.business.site/',
                'created_at' => '2020-10-03 05:11:27',
                'updated_at' => '2020-10-03 05:11:27',
            ),
        ));
        
        
    }
}