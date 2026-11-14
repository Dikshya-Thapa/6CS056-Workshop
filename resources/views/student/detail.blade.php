@extends('layout')

@section('title', 'Student Details')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">{{ $student->name }}</h1>
        <p class="page-description">
            Student profile details.
        </p>
    </div>

    <div class="actions">
        <a href="/students/{{ $student->id }}/edit" class="btn btn-warning">
            Edit Student
        </a>

        <a href="/students" class="btn btn-secondary">
            Back
        </a>
    </div>
</div>

<div class="card">

    <div class="details-grid">

        <div class="detail-card">
            <div class="detail-label">Student ID</div>
            <div class="detail-value">#{{ $student->id }}</div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Full Name</div>
            <div class="detail-value">{{ $student->name }}</div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Email</div>
            <div class="detail-value">{{ $student->email }}</div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Phone</div>
            <div class="detail-value">{{ $student->phone }}</div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Date of Birth</div>
            <div class="detail-value">
                {{ $student->date_of_birth ?? 'Not provided' }}
            </div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Address</div>
            <div class="detail-value">
                {{ $student->address ?? 'Not provided' }}
            </div>
        </div>

    </div>

</div>

@endsection