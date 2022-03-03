<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_infos')->insert([
            'email' => 'someinfo6@gmail.com',
            'phone'=>'123456789',
            'address'=>'maser el gadida',
            'facebook'=>'facebook.com',
            'instagram'=>'insta.com',
            'tweeter'=>'tweeter.com',
            'youtube'=>'youtube.com',
        ]);
    }
}
