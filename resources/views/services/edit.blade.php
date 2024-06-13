@extends('layouts.app')

@section('content')
<h1 class="mb-4">Edytuj usługę</h1>
<form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nazwa:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $service->name }}">
    </div>
    <div class="form-group">
        <label for="price">Cena:</label>
        <input type="text" name="price" id="price" class="form-control" value="{{ $service->price }}">
    </div>
    <div class="form-group">
        <label for="image">Zdjęcie:</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Zaktualizuj</button>
</form>
@endsection
