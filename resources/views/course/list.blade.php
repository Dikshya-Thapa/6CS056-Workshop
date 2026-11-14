@extends('layout')

@section('title', 'Courses')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Courses</h1>

        <p class="page-description">
            Manage courses offered by the institute.
        </p>
    </div>

    <a href="/course/create" class="btn btn-primary">
        + New Course
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="table-card">
<div class="table-wrapper">

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Course</th>
            <th>Duration</th>
            <th>Fee</th>
            <th>Difficulty</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
    @forelse($courses as $course)

        <tr>
            <td>#{{ $course->id }}</td>

            <td>
                <strong>{{ $course->name }}</strong>
            </td>

            <td>{{ $course->duration }} weeks</td>

            <td>{{ number_format($course->fee, 2) }}</td>

            <td>{{ $course->difficulty }}</td>

            <td>
                @if($course->is_active)
                    <span class="status-active">● Active</span>
                @else
                    <span class="status-inactive">● Inactive</span>
                @endif
            </td>

            <td>
                <div class="actions">

                    <a
                        href="/courses/{{ $course->id }}"
                        class="btn btn-secondary"
                    >
                        View
                    </a>

                    <a
                        href="/courses/{{ $course->id }}/edit"
                        class="btn btn-warning"
                    >
                        Edit
                    </a>

                    <form
                        action="/courses/{{ $course->id }}"
                        method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this course?');"
                    >
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </form>

                </div>
            </td>
        </tr>

    @empty

        <tr>
            <td colspan="7">
                <div class="empty-state">
                    No courses found.
                </div>
            </td>
        </tr>

    @endforelse
    </tbody>

</table>

</div>
</div>

@endsection