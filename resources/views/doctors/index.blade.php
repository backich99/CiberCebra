@extends('layouts.app')

@section('title', 'Directorio de Doctores')

@section('content')
<h1>Directorio de Doctores</h1>

<form action="{{ route('doctors.index') }}" method="GET">
    <input type="search" name="search" placeholder="Buscar por nombre, especialidad o ciudad..." value="{{ request('search') }}">
    <button type="submit">Buscar</button>
</form>

@forelse($doctors as $doctor)
    <div class="card">
        <h3><a href="{{ route('doctors.show', $doctor) }}">{{ $doctor->name }}</a></h3>
        <p><span class="badge">{{ $doctor->specialty }}</span> · {{ $doctor->city }}, {{ $doctor->state }}</p>
        <small>{{ $doctor->recommendations_count }} recomendación(es)</small>
    </div>
@empty
    <p>No se encontraron doctores.</p>
@endforelse

{{ $doctors->withQueryString()->links() }}
@endsection
