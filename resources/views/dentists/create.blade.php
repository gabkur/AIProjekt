@extends('layouts.app')

@section('content')
<h1 class="mb-4">Dodaj dentystę</h1>
<form action="{{ route('dentists.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Imię:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="specialization">Specjalizacja:</label>
        <input type="text" name="specialization" id="specialization" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Dodaj</button>
</form>
@endsection
