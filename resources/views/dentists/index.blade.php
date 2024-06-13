@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dentyści</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Imię</th>
                <th>Specjalizacja</th>
                @auth
                <th>Akcje</th>
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach($dentists as $dentist)
                <tr>
                    <td>{{ $dentist->name }}</td>
                    <td>{{ $dentist->specialization }}</td>
                    @auth
                    <td>
                        <a href="{{ route('dentists.edit', $dentist->id) }}" class="btn btn-warning">Edytuj</a>
                        <form action="{{ route('dentists.destroy', $dentist->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </td>
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
    @auth
    <a href="{{ route('dentists.create') }}" class="btn btn-primary">Dodaj dentystę</a>
    @endauth
</div>
@endsection
