<?php

namespace App\Http\Controllers\Home;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\Admin\AppointmentNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\AppointmentRequest;

class AppointmentController extends Controller
{
    public function store(AppointmentRequest $appointmentRequest)
    {
        $appointment =  new Appointment([
            'department_id'  => $appointmentRequest->input('department_id'),
            'doctor_id'      => $appointmentRequest->input('doctor_id'),
            'name'           => $appointmentRequest->input('name'),
            'email'          => $appointmentRequest->input('email'),
            'phone'          => $appointmentRequest->input('phone'),
            'date'           => $appointmentRequest->input('date'),
            'message'        => $appointmentRequest->input('message'),
            'is_active'      => 0,
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'Your request has been registered and will be answered after checking');

        #__________________________________ Notification

        $thisUser = Auth::user();

        Notification::send($thisUser, new AppointmentNotification($appointment));

        $appointment->save();
        #___________________________________ Redirect to index method
        return redirect()->back();
    }
}
