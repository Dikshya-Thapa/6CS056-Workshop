
<x-layouts.app title="Create Student">

    <a class="back-link" href="{{ route('students.index') }}">
        &larr; Back to students
    </a>

    <div class="page-heading">
        <div>
            <span class="eyebrow">STUDENTS</span>
            <h1>Add a student</h1>

            <p class="muted">
                Enter the student information below.
            </p>
        </div>
    </div>

    <div class="panel form-panel">
        <form method="POST" action="{{ route('students.store') }}">
            @csrf

            <x-students.form :student="new \App\Models\Student()" />

            <div class="form-actions">
                <button class="btn" type="submit">
                    Create student
                </button>

                <a class="btn btn-secondary"
                   href="{{ route('students.index') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>

</x-layouts.app>
