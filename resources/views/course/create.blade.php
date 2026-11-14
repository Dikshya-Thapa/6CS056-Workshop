@extends('layout')

@section('title', 'Create Course')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Create Course</h1>

        <p class="page-description">
            Add a new course to your institute.
        </p>
    </div>

    <a href="/courses" class="btn btn-secondary">
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

<form action="/course" method="POST">

    @csrf

    <div class="form-grid">

        <div class="form-group">
            <label class="form-label">Course Name</label>

            <input
                class="form-control"
                type="text"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Duration (weeks)</label>

            <input
                class="form-control"
                type="number"
                name="duration"
                value="{{ old('duration') }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Fee</label>

            <input
                class="form-control"
                type="number"
                step="0.01"
                name="fee"
                value="{{ old('fee') }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Difficulty</label>

            <select class="form-control" name="difficulty">
                <option value="">Select difficulty</option>
                <option value="Easy">Easy</option>
                <option value="Medium">Medium</option>
                <option value="Hard">Hard</option>
            </select>
        </div>

        <div class="form-group full">
            <label class="form-label">Description</label>

            <textarea
                class="form-control"
                name="description"
            >{{ old('description') }}</textarea>
        </div>

        <div class="form-group full">
            <label class="checkbox-row">
                <input type="checkbox" name="is_active" value="1">
                Active Course
            </label>
        </div>

    </div>

    <div class="form-actions">
        <button class="btn btn-primary">
            Create Course
        </button>

        <a href="/courses" class="btn btn-secondary">
            Cancel
        </a>
    </div>

</form>

</div>

@endsection