<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            Admin::class,
            Field::class,
            classifications::class,
            user::class,
            RolesAndPermissionsSeeder::class,
            Img_seeder::class,
            Owner::class,
            About::class,
            ContactInfoSeeder::class,
        ]);
    }
}
