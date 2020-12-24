<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
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
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Rangga Sembako',
                'avatar' => 'brands\\December2020\\RooCUtVHuGdgBsvdoNJp.png',
                'url' => 'www.ranggasembako.com',
                'created_at' => '2020-12-20 08:37:39',
                'updated_at' => '2020-12-20 08:37:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}