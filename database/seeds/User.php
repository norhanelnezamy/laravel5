<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'name'=>'punk',
            'level'=>'admin',
            'email'=>'emadelmogy619@gmail.com',
            'password'=>bcrypt('123456')


        ));
    }
}
