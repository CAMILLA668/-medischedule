<?php 
namespace App\Services;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Specialty;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AppointmentService
{
    public function schedule(Doctor $doctor, User $user)
    {
        return DB::transcrition(function () use ($doctor, $user)) {

        }

    }
}
?>