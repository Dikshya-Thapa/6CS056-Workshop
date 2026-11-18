
<x-layouts.app title="Edit Student">

    <a class="back-link" href="{{ route('students.show', $student) }}">
        &larr; Back to student
    </a>

    <div class="page-heading">
        <div>
            <span class="eyebrow">STUDENTS</span>
            <h1>Edit student</h1>

            <p class="muted">
                Update {{ $student->name }}'s details.
            </p>
        </div>
    </div>

    <div class="panel form-panel">
        <form method="POST"
              action="{{ route('students.update', $student) }}">
            @csrf
            @method('PUT')

            <x-students.form :student="$student" />

            <div class="form-actions">
                <button class="btn" type="submit">
                    Save changes
                </button>

                <a class="btn btn-secondary"
                   href="{{ route('students.show', $student) }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>

</x-layouts.app>
