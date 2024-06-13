@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usługi</h1>
    @auth
        <a href="{{ route('services.create') }}" class="btn btn-primary">Dodaj usługę</a>
    @endauth
    <div class="row mt-4 card-container">
        @foreach($services as $service)
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mb-4">
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top" alt="{{ $service->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $service->name }}</h5>
                    <p class="card-text">{{ number_format($service->price, 2) }} zł</p>
                </div>
                @auth
                    <div class="card-footer">
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edytuj</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
