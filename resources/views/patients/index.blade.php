@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pacjenci</h1>
    <a href="{{ route('patients.create') }}" class="btn btn-primary">Dodaj pacjenta</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Imię</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->phone }}</td>
                <td>
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edytuj</a>
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
