<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Dentist;
use App\Models\Service;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $patients = Patient::all();
        $dentists = Dentist::all();
        $services = Service::all();
        return view('appointments.create', compact('patients', 'dentists', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'dentist_id' => 'required',
            'service_id' => 'required',
            'appointment_date' => 'required|date',
        ]);

        Appointment::create([
            'patient_id' => $request->patient_id,
            'dentist_id' => $request->dentist_id,
            'service_id' => $request->service_id,
            'appointment_date' => $request->appointment_date,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Wizyta została dodana.');
    }

    public function edit($id)
    {
        $appointment = Appointment::find($id);
        $appointment->appointment_date = \Carbon\Carbon::parse($appointment->appointment_date); // Konwersja do obiektu DateTime
        $patients = Patient::all();
        $dentists = Dentist::all();
        $services = Service::all();
        return view('appointments.edit', compact('appointment', 'patients', 'dentists', 'services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'patient_id' => 'required',
            'dentist_id' => 'required',
            'service_id' => 'required',
            'appointment_date' => 'required|date',
        ]);

        $appointment = Appointment::find($id);
        $appointment->update([
            'patient_id' => $request->patient_id,
            'dentist_id' => $request->dentist_id,
            'service_id' => $request->service_id,
            'appointment_date' => $request->appointment_date,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Wizyta została zaktualizowana.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Wizyta została usunięta.');
    }
}
