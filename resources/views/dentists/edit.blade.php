@extends('layouts.app')

@section('content')
<h1 class="mb-4">Edytuj dentystę</h1>
<form action="{{ route('dentists.update', $dentist->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Imię:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $dentist->name }}">
    </div>
    <div class="form-group">
        <label for="specialization">Specjalizacja:</label>
        <input type="text" name="specialization" id="specialization" class="form-control" value="{{ $dentist->specialization }}">
    </div>
    <button type="submit" class="btn btn-primary">Zaktualizuj</button>
</form>
@endsection
