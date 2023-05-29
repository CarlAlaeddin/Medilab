<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::query()->orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.appointment.index', compact(['appointments']));
    }


    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        return view('admin.pages.appointment.show', compact(['appointment']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted appointment successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.appointment.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function is_active(Appointment $appointment)
    {
        if ($appointment->getRawOriginal('is_active') == 1) {
            $appointment->update([
                'is_active' => 0
            ]);
            #___________________________________ Alert success
            Alert::warning('success report', 'The appointment is now cancelled');
        } else {
            $appointment->update([
                'is_active' => 1
            ]);
            #___________________________________ Alert success
            Alert::warning('success report', 'The appointment is currently standing');
        }

        #___________________________________ Redirect to index method
        return redirect()->route('admin.appointment.index');
    }
}
