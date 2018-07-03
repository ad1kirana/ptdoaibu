<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\User::insert([
            [
              'id'  => '1',
              'name' => 'superadmin',
              'email'  => 'superadmin@admin.com',
              'password' =>  Hash::make('passadi')
            ],
            [
              'id'  => '2',
              'name' => 'administrator',
              'email'  => 'administrator@admin.com',
              'password' =>  Hash::make('passadi')
            ],
            [
              'id'  => '3',
              'name' => 'adminbengkel',
              'email'  => 'adminbengkel@admin.com',
              'password' =>  Hash::make('passadi')
            ],
            [
              'id'  => '4',
              'name' => 'direksi',
              'email'  => 'direksi@admin.com',
              'password' =>  Hash::make('passadi')
            ],
            [
              'id'  => '5',
              'name' => 'other',
              'email'  => 'other@admin.com',
              'password' =>  Hash::make('passadi')
            ],
        ]);
    }
}
