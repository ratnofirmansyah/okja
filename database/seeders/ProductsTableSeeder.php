<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'outlet_id' => 1,
                'category_id' => 1,
                'product_code' => 'GLP001',
                'name' => 'Gula Pasir 1Kg',
                'avatar' => NULL,
                'availability' => 1,
                'price' => 12000,
                'expired_date' => '2021-02-01',
                'qty_balance' => 5,
                'qty_total' => 5,
                'created_at' => '2020-12-23 17:39:11',
                'updated_at' => '2020-12-24 18:57:11',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'outlet_id' => 2,
                'category_id' => 2,
                'product_code' => 'PEP001',
                'name' => 'Pepsodent',
                'avatar' => NULL,
                'availability' => 1,
                'price' => 8000,
                'expired_date' => '2022-01-01',
                'qty_balance' => 4,
                'qty_total' => 5,
                'created_at' => '2020-12-23 21:02:15',
                'updated_at' => '2020-12-24 18:36:34',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}