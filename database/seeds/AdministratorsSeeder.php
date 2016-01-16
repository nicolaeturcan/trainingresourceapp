<?php

use Illuminate\Database\Seeder;

class AdministratorsSeeder extends Seeder
{
    public function run()
    {
        DB::table('administrators')->delete();

        $dateTime = Carbon\Carbon::now();

        \DB::table('administrators')->insert(array(
            array(
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'name' => 'Formació TE administrator',
                'created_at' => $dateTime,
                'updated_at' => $dateTime,
            )
        ));
    }
}