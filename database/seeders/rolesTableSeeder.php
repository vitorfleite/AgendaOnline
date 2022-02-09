<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'user_id' => '1',
            'role'    => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
