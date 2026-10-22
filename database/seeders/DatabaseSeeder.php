<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'admin@medi.test'],
            [
                'name'     => 'administrador',
                'password' => Hash::make(12345678),
                'cpf'      => '12345678901',
                'phone'    => '24900000001',
                'role'     => 'admin',
                'status'   => true,
            ]
        );

        User::updateOrCreate(
            ['email' => 'usuario@medi.test'],
            [
                'name'     => 'User demo',
                'password' => Hash::make(12345678),
                'cpf'      => '98765432100',
                'phone'    => '24900000002',
                'role'     => 'patient',
                'status'   => true,
            ]
        );

        $this->call([
            SpecialtySeeder::class,
            DoctorSeeder::class,
        ]);
    }
}
