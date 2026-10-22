<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\specialtie;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $specialties = [
        'Cardiologia',
        'Dermatologia',
        'Ortopedia',
        'Pediatria',
        'Ginecologia',
      ];

      foreach ($specialties as $specialty) {
        Specialty::FirstOrCreate([
            'name' => $specialty,
        ]);
      }
    }
}
