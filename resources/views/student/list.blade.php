@extends('layout')

@section('title', 'Students')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Students</h1>
        <p class="page-description">
            Manage all students registered at the institute.
        </p>
    </div>

    <a href="/student/create" class="btn btn-primary">
        + New Student
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
                    <th>Student</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
            @forelse($students as $student)

                <tr>
                    <td>#{{ $student->id }}</td>

                    <td>
                        <strong>{{ $student->name }}</strong>
                    </td>

                    <td>{{ $student->email }}</td>

                    <td>{{ $student->phone }}</td>

                    <td>
                        <div class="actions">

                            <a
                                href="/students/{{ $student->id }}"
                                class="btn btn-secondary"
                            >
                                View
                            </a>

                            <a
                                href="/students/{{ $student->id }}/edit"
                                class="btn btn-warning"
                            >
                                Edit
                            </a>

                            <form
                                method="POST"
                                action="/students/{{ $student->id }}"
                                onsubmit="return confirm('Are you sure you want to delete this student?');"
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
                    <td colspan="5">
                        <div class="empty-state">
                            No students found.
                        </div>
                    </td>
                </tr>

            @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection