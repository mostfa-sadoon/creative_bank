<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classifications extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('classifications')->insert([
            'name_ar' => 'طالب',
            'name_en' => 'student',
        ]);
      
    }
}
