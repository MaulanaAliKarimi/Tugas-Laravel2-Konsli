<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\factory as faker;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $faker = faker::create('id_ID');
       
        DB::table('users')->insert([
             'name' => str::random(10),
             'email' => $faker->email,
             'password' => Hash::make('oops0098')
         ]);
       
      }
    }
