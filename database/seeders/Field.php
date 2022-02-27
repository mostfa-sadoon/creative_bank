<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Field extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void	
     */
    public function run()
    {
        //
        DB::table('fields')->insert([
            'name_ar' => 'تكنولوجيا',
            'name_en' => 'technology',
        ]);
    }
}
