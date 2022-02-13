<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Img_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<=4;$i++){
            DB::table('img_sliders')->insert([
                'img' => ''.$i.'.jpg',
            ]);
        }
    }
}
