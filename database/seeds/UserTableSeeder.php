<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Modelo de usuario
        factory(TeachMe\Entities\User::class)->create([
            'name' => 'Jhonatan',
            'email' => 'jdev@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('secret'),
        ]);
        factory(TeachMe\Entities\User::class, 9)->create();
    }
}
