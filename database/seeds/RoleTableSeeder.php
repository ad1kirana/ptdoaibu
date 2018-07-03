<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Role::insert([
            [
              'id'  => '1',
              'name' => 'superadmin'
            ],
            [
              'id'  => '2',
              'name' => 'administrator'
            ],
            [
              'id'  => '3',
              'name' => 'adminbengkel'
            ],
            [
              'id'  => '4',
              'name' => 'direksi'
            ],
            [
              'id'  => '5',
              'name' => 'other'
            ],
        ]);
    }
    
}
