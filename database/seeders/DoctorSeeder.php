<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\doctors;
use App\Models\specialtie;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cadiology = Specialtie::where(
            'name',
            'Cardiologia'
        )->firstOrFail();

        $dermatology = Specialtie::where(
            'name',
            'Dermatologia'
        )->firstOrFail();

        Doctor::updateOrCreate(
            ['name' => 'Maria Ferreira'],
            [
                'specialty_id'      => $cadiology->id,
                'crm'               => 123456,
                'phone'             => 21992531496,
                'work_start_time'   => now()->addDays(7)->setTime(18, 0),
                'work_end_time'     => now()->addDays(7)->setTime(21, 0),
                'slot_duration'     => 
                'is_active'         => true, 

            ]
        );

        Dctor::updateOrCreate(
            ['name' => 'Severino Cunha'],
            [
                'specialty_id'      => $dermatology->id,
                'crm'               => 987654,
                'phone'             => 21998752147
                'work_start_time'   => now()->addDays(5)->setTime(19, 0),
                'work_end_time'     => now()->addDays(5)->setTime(15, 0),
                'slot_duration'     => 
                'is_active'         => false,
            ]
        );
    }
}
