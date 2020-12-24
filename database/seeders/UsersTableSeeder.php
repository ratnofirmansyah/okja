<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'brand_id' => 1,
                'name' => 'CEO Firman Sembako',
                'email' => 'ceofs@okja.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ku3Wa4BqlPyn6fcsK/T/UeLggjgxuS7LzdzRYvCx2IgLUR9HrByky',
                'created_at' => '2020-12-23 06:05:08',
                'updated_at' => '2020-12-23 06:05:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}