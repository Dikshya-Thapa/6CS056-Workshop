@extends('layout')

@section('title', 'Edit Course')

@section('content')

<div class="page-header">

    <div>
        <h1 class="page-title">Edit Course</h1>

        <p class="page-description">
            Update {{ $course->name }}.
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

<form action="/courses/{{ $course->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="form-grid">

        <div class="form-group">
            <label class="form-label">Course Name</label>

            <input
                class="form-control"
                type="text"
                name="name"
                value="{{ old('name', $course->name) }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Duration</label>

            <input
                class="form-control"
                type="number"
                name="duration"
                value="{{ old('duration', $course->duration) }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Fee</label>

            <input
                class="form-control"
                type="number"
                step="0.01"
                name="fee"
                value="{{ old('fee', $course->fee) }}"
            >
        </div>

        <div class="form-group">
            <label class="form-label">Difficulty</label>

            <select class="form-control" name="difficulty">

                <option
                    value="Easy"
                    {{ old('difficulty', $course->difficulty) === 'Easy' ? 'selected' : '' }}
                >
                    Easy
                </option>

                <option
                    value="Medium"
                    {{ old('difficulty', $course->difficulty) === 'Medium' ? 'selected' : '' }}
                >
                    Medium
                </option>

                <option
                    value="Hard"
                    {{ old('difficulty', $course->difficulty) === 'Hard' ? 'selected' : '' }}
                >
                    Hard
                </option>

            </select>
        </div>

        <div class="form-group full">
            <label class="form-label">Description</label>

            <textarea
                class="form-control"
                name="description"
            >{{ old('description', $course->description) }}</textarea>
        </div>

        <div class="form-group full">

            <label class="checkbox-row">

                <input
                    type="checkbox"
                    name="is_active"
                    value="1"
                    {{ old('is_active', $course->is_active) ? 'checked' : '' }}
                >

                Active Course

            </label>

        </div>

    </div>

    <div class="form-actions">

        <button class="btn btn-primary">
            Save Changes
        </button>

        <a href="/courses" class="btn btn-secondary">
            Cancel
        </a>

    </div>

</form>

</div>

@endsection