@extends('layouts.app')

@section('content')
<h1 class="mb-4">Dodaj pacjenta</h1>
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Imię:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="phone">Telefon:</label>
        <input type="text" name="phone" id="phone" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Dodaj</button>
</form>
@endsection
