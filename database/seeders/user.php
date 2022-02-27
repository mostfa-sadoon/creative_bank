<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'mostafa sadoun',
            'email' => 'sadoonmostfa6@gmail.com',
            'phone'=>'123456789',
            'date_of_birth'=>Carbon::parse('2000-01-01'),
            'field_id'=>1,
            'classified_id'=>1,
            'address'=>'maser el gadida',
            'password' => Hash::make(123456),
        ]);
    }
}
