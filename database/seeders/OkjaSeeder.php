<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OkjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-09-21 14:24:27',
                'updated_at' => '2020-09-21 14:24:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-09-21 14:24:27',
                'updated_at' => '2020-09-21 14:24:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-09-21 14:24:27',
                'updated_at' => '2020-09-21 14:24:27',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'brands',
                'slug' => 'brands',
                'display_name_singular' => 'Brand',
                'display_name_plural' => 'Brands',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Models\\Brand',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"updated_at","order_direction":"asc","default_search_key":"name"}',
                'created_at' => '2020-10-02 14:19:28',
                'updated_at' => '2020-10-02 14:19:28',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'outlets',
                'slug' => 'outlets',
                'display_name_singular' => 'Outlet',
                'display_name_plural' => 'Outlets',
                'icon' => 'voyager-shop',
                'model_name' => 'App\\Models\\Outlet',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"updated_at","order_direction":"asc","default_search_key":"name","scope":null}',
                'created_at' => '2020-10-03 05:14:01',
                'updated_at' => '2020-10-03 05:16:26',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Models\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"updated_at","order_direction":"asc","default_search_key":"name"}',
                'created_at' => '2020-10-03 05:27:27',
                'updated_at' => '2020-10-03 05:27:27',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => 'voyager-hotdog',
                'model_name' => 'App\\Models\\Product',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"updated_at","order_direction":"asc","default_search_key":"name"}',
                'created_at' => '2020-10-03 05:29:57',
                'updated_at' => '2020-10-03 05:29:57',
            ),
        ));

		\DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data_type_id' => 1,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'data_type_id' => 1,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'data_type_id' => 1,
                'field' => 'email',
                'type' => 'text',
                'display_name' => 'Email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'data_type_id' => 1,
                'field' => 'password',
                'type' => 'password',
                'display_name' => 'Password',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'data_type_id' => 1,
                'field' => 'remember_token',
                'type' => 'text',
                'display_name' => 'Remember Token',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'data_type_id' => 1,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'data_type_id' => 1,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'data_type_id' => 1,
                'field' => 'avatar',
                'type' => 'image',
                'display_name' => 'Avatar',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'data_type_id' => 1,
                'field' => 'user_belongsto_role_relationship',
                'type' => 'relationship',
                'display_name' => 'Role',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}',
                'order' => 10,
            ),
            9 => 
            array (
                'id' => 10,
                'data_type_id' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'type' => 'relationship',
                'display_name' => 'Roles',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'order' => 11,
            ),
            10 => 
            array (
                'id' => 11,
                'data_type_id' => 1,
                'field' => 'settings',
                'type' => 'hidden',
                'display_name' => 'Settings',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 12,
            ),
            11 => 
            array (
                'id' => 12,
                'data_type_id' => 2,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'data_type_id' => 2,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'data_type_id' => 2,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'data_type_id' => 2,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            15 => 
            array (
                'id' => 16,
                'data_type_id' => 3,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'data_type_id' => 3,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'data_type_id' => 3,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'data_type_id' => 3,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            19 => 
            array (
                'id' => 20,
                'data_type_id' => 3,
                'field' => 'display_name',
                'type' => 'text',
                'display_name' => 'Display Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 5,
            ),
            20 => 
            array (
                'id' => 21,
                'data_type_id' => 1,
                'field' => 'role_id',
                'type' => 'text',
                'display_name' => 'Role',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 9,
            ),
            21 => 
            array (
                'id' => 22,
                'data_type_id' => 7,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'data_type_id' => 7,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'data_type_id' => 7,
                'field' => 'avatar',
                'type' => 'image',
                'display_name' => 'Avatar',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'data_type_id' => 7,
                'field' => 'url',
                'type' => 'text',
                'display_name' => 'Url',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            25 => 
            array (
                'id' => 26,
                'data_type_id' => 7,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 5,
            ),
            26 => 
            array (
                'id' => 27,
                'data_type_id' => 7,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 6,
            ),
            27 => 
            array (
                'id' => 28,
                'data_type_id' => 8,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'data_type_id' => 8,
                'field' => 'brand_id',
                'type' => 'text',
                'display_name' => 'Brand Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'data_type_id' => 8,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            30 => 
            array (
                'id' => 31,
                'data_type_id' => 8,
                'field' => 'address',
                'type' => 'text_area',
                'display_name' => 'Address',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ),
            31 => 
            array (
                'id' => 32,
                'data_type_id' => 8,
                'field' => 'latitude',
                'type' => 'text',
                'display_name' => 'Latitude',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
            32 => 
            array (
                'id' => 33,
                'data_type_id' => 8,
                'field' => 'longitude',
                'type' => 'text',
                'display_name' => 'Longitude',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 7,
            ),
            33 => 
            array (
                'id' => 34,
                'data_type_id' => 8,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 8,
            ),
            34 => 
            array (
                'id' => 35,
                'data_type_id' => 8,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 9,
            ),
            35 => 
            array (
                'id' => 36,
                'data_type_id' => 8,
                'field' => 'outlet_belongsto_brand_relationship',
                'type' => 'relationship',
                'display_name' => 'brands',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\Models\\\\Brand","table":"brands","type":"belongsTo","column":"brand_id","key":"id","label":"name","pivot_table":"brands","pivot":"0","taggable":"0"}',
                'order' => 3,
            ),
            36 => 
            array (
                'id' => 37,
                'data_type_id' => 9,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'data_type_id' => 9,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            38 => 
            array (
                'id' => 39,
                'data_type_id' => 9,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 3,
            ),
            39 => 
            array (
                'id' => 40,
                'data_type_id' => 9,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 4,
            ),
            40 => 
            array (
                'id' => 41,
                'data_type_id' => 10,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'data_type_id' => 10,
                'field' => 'outlet_id',
                'type' => 'text',
                'display_name' => 'Outlet Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'data_type_id' => 10,
                'field' => 'category_id',
                'type' => 'text',
                'display_name' => 'Category Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            43 => 
            array (
                'id' => 44,
                'data_type_id' => 10,
                'field' => 'product_code',
                'type' => 'text',
                'display_name' => 'Product Code',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            44 => 
            array (
                'id' => 45,
                'data_type_id' => 10,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ),
            45 => 
            array (
                'id' => 46,
                'data_type_id' => 10,
                'field' => 'avatar',
                'type' => 'text',
                'display_name' => 'Avatar',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
            46 => 
            array (
                'id' => 47,
                'data_type_id' => 10,
                'field' => 'availability',
                'type' => 'text',
                'display_name' => 'Availability',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 7,
            ),
            47 => 
            array (
                'id' => 48,
                'data_type_id' => 10,
                'field' => 'price',
                'type' => 'text',
                'display_name' => 'Price',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 8,
            ),
            48 => 
            array (
                'id' => 49,
                'data_type_id' => 10,
                'field' => 'expired_date',
                'type' => 'text',
                'display_name' => 'Expired Date',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 9,
            ),
            49 => 
            array (
                'id' => 50,
                'data_type_id' => 10,
                'field' => 'qty_balance',
                'type' => 'text',
                'display_name' => 'Qty Balance',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 10,
            ),
            50 => 
            array (
                'id' => 51,
                'data_type_id' => 10,
                'field' => 'qty_total',
                'type' => 'text',
                'display_name' => 'Qty Total',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 11,
            ),
            51 => 
            array (
                'id' => 52,
                'data_type_id' => 10,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 12,
            ),
            52 => 
            array (
                'id' => 53,
                'data_type_id' => 10,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 13,
            ),
        ));

		\DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-09-21 14:24:28',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-10-03 07:01:14',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-10-03 07:01:14',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-10-03 07:01:14',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-10-03 07:01:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-10-03 07:01:08',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-10-03 07:01:08',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-10-03 07:01:08',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-10-03 07:01:08',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 6,
                'created_at' => '2020-09-21 14:24:28',
                'updated_at' => '2020-10-03 07:01:29',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2020-09-21 14:24:31',
                'updated_at' => '2020-10-03 07:01:08',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Brands',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-company',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2020-10-02 14:19:28',
                'updated_at' => '2020-10-03 07:01:29',
                'route' => 'voyager.brands.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Outlets',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-shop',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2020-10-03 05:14:01',
                'updated_at' => '2020-10-03 07:01:29',
                'route' => 'voyager.outlets.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2020-10-03 05:27:27',
                'updated_at' => '2020-10-03 07:01:29',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Products',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hotdog',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2020-10-03 05:29:57',
                'updated_at' => '2020-10-03 07:01:29',
                'route' => 'voyager.products.index',
                'parameters' => NULL,
            ),
        ));

		\DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-09-21 14:24:29',
                'updated_at' => '2020-09-21 14:24:29',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-09-21 14:24:30',
                'updated_at' => '2020-09-21 14:24:30',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-09-21 14:24:30',
                'updated_at' => '2020-09-21 14:24:30',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-09-21 14:24:30',
                'updated_at' => '2020-09-21 14:24:30',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-21 14:24:30',
                'updated_at' => '2020-09-21 14:24:30',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-21 14:24:30',
                'updated_at' => '2020-09-21 14:24:30',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-21 14:24:30',
                'updated_at' => '2020-09-21 14:24:30',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-21 14:24:30',
                'updated_at' => '2020-09-21 14:24:30',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-21 14:24:30',
                'updated_at' => '2020-09-21 14:24:30',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-09-21 14:24:31',
                'updated_at' => '2020-09-21 14:24:31',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_brands',
                'table_name' => 'brands',
                'created_at' => '2020-10-02 14:19:28',
                'updated_at' => '2020-10-02 14:19:28',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_brands',
                'table_name' => 'brands',
                'created_at' => '2020-10-02 14:19:28',
                'updated_at' => '2020-10-02 14:19:28',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_brands',
                'table_name' => 'brands',
                'created_at' => '2020-10-02 14:19:28',
                'updated_at' => '2020-10-02 14:19:28',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_brands',
                'table_name' => 'brands',
                'created_at' => '2020-10-02 14:19:28',
                'updated_at' => '2020-10-02 14:19:28',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_brands',
                'table_name' => 'brands',
                'created_at' => '2020-10-02 14:19:28',
                'updated_at' => '2020-10-02 14:19:28',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_outlets',
                'table_name' => 'outlets',
                'created_at' => '2020-10-03 05:14:01',
                'updated_at' => '2020-10-03 05:14:01',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_outlets',
                'table_name' => 'outlets',
                'created_at' => '2020-10-03 05:14:01',
                'updated_at' => '2020-10-03 05:14:01',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_outlets',
                'table_name' => 'outlets',
                'created_at' => '2020-10-03 05:14:01',
                'updated_at' => '2020-10-03 05:14:01',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_outlets',
                'table_name' => 'outlets',
                'created_at' => '2020-10-03 05:14:01',
                'updated_at' => '2020-10-03 05:14:01',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_outlets',
                'table_name' => 'outlets',
                'created_at' => '2020-10-03 05:14:01',
                'updated_at' => '2020-10-03 05:14:01',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-10-03 05:27:27',
                'updated_at' => '2020-10-03 05:27:27',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-10-03 05:27:27',
                'updated_at' => '2020-10-03 05:27:27',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-10-03 05:27:27',
                'updated_at' => '2020-10-03 05:27:27',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-10-03 05:27:27',
                'updated_at' => '2020-10-03 05:27:27',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-10-03 05:27:27',
                'updated_at' => '2020-10-03 05:27:27',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2020-10-03 05:29:57',
                'updated_at' => '2020-10-03 05:29:57',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2020-10-03 05:29:57',
                'updated_at' => '2020-10-03 05:29:57',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2020-10-03 05:29:57',
                'updated_at' => '2020-10-03 05:29:57',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2020-10-03 05:29:57',
                'updated_at' => '2020-10-03 05:29:57',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2020-10-03 05:29:57',
                'updated_at' => '2020-10-03 05:29:57',
            ),
        ));

        if (!\DB::table('roles')->where('id', '1')->first()) {
            \DB::table('roles')->insert(
                [
                    'id' => 1,
                    'name' => 'admin',
                    'display_name' => 'Administrator',
                    'created_at' => '2020-09-21 14:24:29',
                    'updated_at' => '2020-09-21 14:24:29',
                ]
            );
        }

        if (!\DB::table('roles')->where('id', '2')->first()) {
            \DB::table('roles')->insert(
                [
                    'id' => 2,
                    'name' => 'user',
                    'display_name' => 'Normal User',
                    'created_at' => '2020-09-21 14:24:29',
                    'updated_at' => '2020-09-21 14:24:29',
                ]
            );
        }

        if (!\DB::table('roles')->where('id', '3')->first()) {
            \DB::table('roles')->insert(
                [
                    'id' => 3,
                    'name' => 'brand',
                    'display_name' => 'Brand Admin',
                    'created_at' => '2020-09-21 14:24:29',
                    'updated_at' => '2020-09-21 14:24:29',
                ]
            );
        }

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            2 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            33 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            35 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            39 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            42 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
        ));

		\DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Okja',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Okja is a simple and free data-stock management for small or start up bussiness.',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings\\October2020\\BSGoIuGHnd7hVsvyNUnw.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings\\October2020\\4GoH0fZ8RzbROPrMWk10.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Okja',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to Okja. The Simple and easy to use data-stock management for your bussiness.',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => 'settings\\October2020\\495daELiT5eprhMYzxP6.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings\\October2020\\uXFtWNocVVbiLRyq3wvD.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
        ));
    }
}
