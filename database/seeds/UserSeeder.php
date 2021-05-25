<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => 'sanket@091283'],
        ];
        foreach ($data as $value) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            ]);
        }
    }
}
