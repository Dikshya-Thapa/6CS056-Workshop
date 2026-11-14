@extends('layout')

@section('title', 'Course Details')

@section('content')

<div class="page-header">

    <div>
        <h1 class="page-title">{{ $course->name }}</h1>

        <p class="page-description">
            Course information and availability.
        </p>
    </div>

    <div class="actions">

        <a
            href="/courses/{{ $course->id }}/edit"
            class="btn btn-warning"
        >
            Edit Course
        </a>

        <a href="/courses" class="btn btn-secondary">
            Back
        </a>

    </div>

</div>

<div class="card">

    <div class="details-grid">

        <div class="detail-card">
            <div class="detail-label">Course ID</div>
            <div class="detail-value">#{{ $course->id }}</div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Course Name</div>
            <div class="detail-value">{{ $course->name }}</div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Duration</div>
            <div class="detail-value">{{ $course->duration }} weeks</div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Fee</div>
            <div class="detail-value">
                {{ number_format($course->fee, 2) }}
            </div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Difficulty</div>
            <div class="detail-value">{{ $course->difficulty }}</div>
        </div>

        <div class="detail-card">
            <div class="detail-label">Status</div>

            <div class="detail-value">
                {{ $course->is_active ? 'Active' : 'Inactive' }}
            </div>
        </div>

        <div class="detail-card" style="grid-column: 1 / -1;">
            <div class="detail-label">Description</div>
            <div class="detail-value">{{ $course->description }}</div>
        </div>

    </div>

</div>

@endsection