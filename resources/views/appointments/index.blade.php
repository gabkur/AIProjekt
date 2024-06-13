@extends('layouts.app')

@section('content')
<h1 class="mb-4">Wizyty</h1>
<a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3">Dodaj wizytę</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Pacjent</th>
            <th>Dentysta</th>
            <th>Usługa</th>
            <th>Data wizyty</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->patient->name }}</td>
                <td>{{ $appointment->dentist->name }}</td>
                <td>{{ $appointment->service->name }}</td>
                <td>{{ $appointment->appointment_date }}</td>
                <td>
                    <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-warning btn-sm">Edytuj</a>
                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
