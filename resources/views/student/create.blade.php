@extends('layout')

@section('title', 'Create Student')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Add Student</h1>
        <p class="page-description">
            Create a new student profile.
        </p>
    </div>

    <a href="/students" class="btn btn-secondary">
        ← Back
    </a>
</div>

<div class="card">

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Please correct these errors:</strong>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/student" method="POST">
    @csrf

    <div class="form-grid">

        <div class="form-group">
            <label class="form-label">Full Name</label>

            <input
                class="form-control"
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="Enter full name"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Email</label>

            <input
                class="form-control"
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="student@example.com"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Phone</label>

            <input
                class="form-control"
                type="text"
                name="phone"
                value="{{ old('phone') }}"
                placeholder="Enter phone number"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Date of Birth</label>

            <input
                class="form-control"
                type="date"
                name="date_of_birth"
                value="{{ old('date_of_birth') }}"
            >
        </div>

        <div class="form-group full">
            <label class="form-label">Address</label>

            <textarea
                class="form-control"
                name="address"
                placeholder="Enter address"
            >{{ old('address') }}</textarea>
        </div>

    </div>

    <div class="form-actions">
        <button class="btn btn-primary">
            Create Student
        </button>

        <a href="/students" class="btn btn-secondary">
            Cancel
        </a>
    </div>

</form>

</div>

@endsection