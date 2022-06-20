<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorSignup;
use App\Models\Doctor;

class Dashboard extends Controller
{
    public function index($id){

        $doc = Doctor::find($id);

        // $profile = $doc->doctor;
        // $schedule = $doc->schedule;
        // $appointments = $doc->users;
        $data = compact('doc');
        // $appointment = $doc->;
        return view ('Doctor.dashboard')->with($data);
    }
}
