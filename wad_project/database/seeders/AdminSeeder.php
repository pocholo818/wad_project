<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('admin')->insert([
            [
                'name' => 'Tala Nicole Dimaapi Valdez',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'remember_token' => Str::random(10)
            ],

            [
                'name' => 'Amir El Amari',
                'username' => 'foobar',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'remember_token' => Str::random(10)
            ]
        ]);

    }
}
