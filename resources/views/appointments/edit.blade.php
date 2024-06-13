@extends('layouts.app')

@section('content')
<h1 class="mb-4">Edytuj wizytę</h1>
<form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="patient_id">Pacjent:</label>
        <select name="patient_id" id="patient_id" class="form-control">
            @foreach($patients as $patient)
                <option value="{{ $patient->id }}" @if($patient->id == $appointment->patient_id) selected @endif>{{ $patient->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="dentist_id">Dentysta:</label>
        <select name="dentist_id" id="dentist_id" class="form-control">
            @foreach($dentists as $dentist)
                <option value="{{ $dentist->id }}" @if($dentist->id == $appointment->dentist_id) selected @endif>{{ $dentist->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="service_id">Usługa:</label>
        <select name="service_id" id="service_id" class="form-control">
            @foreach($services as $service)
                <option value="{{ $service->id }}" @if($service->id == $appointment->service_id) selected @endif>{{ $service->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="appointment_date">Data wizyty:</label>
        <input type="datetime-local" name="appointment_date" id="appointment_date" class="form-control" value="{{ $appointment->appointment_date }}">
    </div>
    <button type="submit" class="btn btn-primary">Zaktualizuj</button>
</form>
@endsection
