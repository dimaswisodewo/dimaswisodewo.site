<?php

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
        // $this->call(UserSeeder::class);
        $data[] = [
            'name' => 'Dimas Wisodewo',
            'email' => 'dwisodewo@gmail.com',
            'password' => Hash::make('*Psht1922#'),
            'roles' => 'ADMIN'
        ];

        DB::table('users')->insert($data);
    }
}
