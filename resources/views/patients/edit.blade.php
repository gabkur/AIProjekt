@extends('layouts.app')

@section('content')
<h1 class="mb-4">Edytuj pacjenta</h1>
<form action="{{ route('patients.update', $patient->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Imię:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $patient->name }}">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $patient->email }}">
    </div>
    <div class="form-group">
        <label for="phone">Telefon:</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{ $patient->phone }}">
    </div>
    <button type="submit" class="btn btn-primary">Zaktualizuj</button>
</form>
@endsection
