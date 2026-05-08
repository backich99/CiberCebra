@extends('layouts.app')

@section('title', $doctor->name)

@section('content')
<h1>{{ $doctor->name }}</h1>
<p><span class="badge">{{ $doctor->specialty }}</span> · {{ $doctor->city }}, {{ $doctor->state }}</p>
@if($doctor->contact)
    <p><strong>Contacto:</strong> {{ $doctor->contact }}</p>
@endif

<h2 style="margin-top: 2rem;">Recomendaciones</h2>

@forelse($doctor->recommendations as $rec)
    <div class="card">
        <p><span class="badge">{{ $rec->type === 'diagnosis' ? 'Diagnóstico' : 'Tratamiento' }}</span></p>
        <p>{{ $rec->body }}</p>
        @if($rec->warning)
            <div class="warning">⚠️ {{ $rec->warning }}</div>
        @endif
        <small style="color: #6b7280;">— {{ $rec->user->name ?? 'Anónimo' }}</small>
    </div>
@empty
    <p>Aún no hay recomendaciones para este doctor.</p>
@endforelse
@endsection
