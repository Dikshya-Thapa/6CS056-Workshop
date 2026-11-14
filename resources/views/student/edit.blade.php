@extends('layout')

@section('title', 'Edit Student')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Edit Student</h1>

        <p class="page-description">
            Update {{ $student->name }}'s information.
        </p>
    </div>

    <a href="/students" class="btn btn-secondary">
        ← Back
    </a>
</div>

<div class="card">

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/students/{{ $student->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="form-grid">

        <div class="form-group">
            <label class="form-label">Full Name</label>

            <input
                class="form-control"
                type="text"
                name="name"
                value="{{ old('name', $student->name) }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Email</label>

            <input
                class="form-control"
                type="email"
                name="email"
                value="{{ old('email', $student->email) }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Phone</label>

            <input
                class="form-control"
                type="text"
                name="phone"
                value="{{ old('phone', $student->phone) }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Date of Birth</label>

            <input
                class="form-control"
                type="date"
                name="date_of_birth"
                value="{{ old('date_of_birth', $student->date_of_birth) }}"
            >
        </div>

        <div class="form-group full">
            <label class="form-label">Address</label>

            <textarea
                class="form-control"
                name="address"
            >{{ old('address', $student->address) }}</textarea>
        </div>

    </div>

    <div class="form-actions">
        <button class="btn btn-primary">
            Save Changes
        </button>

        <a href="/students" class="btn btn-secondary">
            Cancel
        </a>
    </div>

</form>

</div>

@endsection