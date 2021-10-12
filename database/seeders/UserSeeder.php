<?php

namespace Database\Seeders;
use App\Models\User;
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
        User::create([
            'name' => 'Gerardo Manuel',
            'apellido' => 'Franco',
            'email' => 'gerardo@gmail.com',
            'dni' => '12345673',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Jamir',
            'apellido' => 'Vargas',
            'email' => 'jamir@gmail.com',
            'dni' => '12345678',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Diego',
            'apellido' => 'Peña',
            'email' => 'diego@gmail.com',
            'dni' => '12345672',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Lorena Caro',
            'apellido' => 'Soria',
            'email' => 'lorena@gmail.com',
            'dni' => '12345671',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

    }
}
