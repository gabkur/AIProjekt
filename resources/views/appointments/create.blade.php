@extends('layouts.app')

@section('content')
<h1 class="mb-4">Dodaj wizytę</h1>
<form action="{{ route('appointments.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="patient_id">Pacjent:</label>
        <select name="patient_id" id="patient_id" class="form-control">
            @foreach($patients as $patient)
                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="dentist_id">Dentysta:</label>
        <select name="dentist_id" id="dentist_id" class="form-control">
            @foreach($dentists as $dentist)
                <option value="{{ $dentist->id }}">{{ $dentist->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="service_id">Usługa:</label>
        <select name="service_id" id="service_id" class="form-control">
            @foreach($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="appointment_date">Data wizyty:</label>
        <input type="datetime-local" name="appointment_date" id="appointment_date" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Dodaj</button>
</form>
@endsection
