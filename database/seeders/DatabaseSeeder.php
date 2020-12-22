<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        // $this->call(DataRowsTableSeeder::class);
        // $this->call(DataTypesTableSeeder::class);
        // $this->call(MenuItemsTableSeeder::class);
        // $this->call(RolesTableSeeder::class);
        // $this->call(PermissionRoleTableSeeder::class);
        // $this->call(PermissionsTableSeeder::class);
        // $this->call(SettingsTableSeeder::class);
        $this->call(OkjaSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(OutletsTableSeeder::class);
    }
}
