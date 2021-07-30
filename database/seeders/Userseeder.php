<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * In this file to accesss the DB u need to import DB as:
     *  use Illuminate\Support\Facades\DB;
     *  use Illuminate\Support\Facades\Hash; this will enable you to use the hash class 
     * DB:table('users')->insert([
     *              'password'=>Hash:make('dcfidid') 
     *                          ]);    // the insert function is an array Therefore it should be useed within an array format 
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
            'name'=>'eli john',
            'email'=>'hugues0401@gmail.com',
            'password'=>Hash::make('1234')
            ],
            [
            'name'=>'eli ',
            'email'=>'pascl0401@gmail.com',
            'password'=>Hash::make('1234')
             ],
        ]);
    }
}
