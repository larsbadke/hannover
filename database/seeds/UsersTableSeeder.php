<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'kontakt@larsbadke.com',
            'first_name' => 'Lars',
            'last_name' => 'Badke',
        ]);


        factory(\App\User::class, 2)->create();

    }
}
