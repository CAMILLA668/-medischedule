<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Specialty;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cadiology = Specialty::where(
            'name',
            'Cardiologia'
        )->firstOrFail();

        $dermatology = Specialty::where(
            'name',
            'Dermatologia'
        )->firstOrFail();

        Doctor::updateOrCreate(
            ['name' => 'Maria Ferreira'],
            [
                'specialty_id'      => $cadiology->id,
                'crm'               => '123456',
                'phone'             => '21992531496',
                'work_start_time'   => now(),
                'work_end_time'     => now(),
                'slot_duration'     => 30,
                'is_active'         => true, 

            ]
        );

        Doctor::updateOrCreate(
            ['name' => 'Severino Cunha'],
            [
                'specialty_id'      => $dermatology->id,
                'crm'               => '987654',
                'phone'             => '21998752147',
                'work_start_time'   => now(),
                'work_end_time'     => now(),
                'slot_duration'     => 30,
                'is_active'         => false,
            ]
        );
    }
}
