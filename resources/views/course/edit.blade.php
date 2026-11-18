
<x-layouts.app title="Edit Course">

    <a class="back-link" href="{{ route('courses.show', $course) }}">
        &larr; Back to course
    </a>

    <div class="page-heading">
        <div>
            <span class="eyebrow">COURSES</span>
            <h1>Edit course</h1>

            <p class="muted">
                Update {{ $course->name }}.
            </p>
        </div>
    </div>

    <div class="panel form-panel">
        <form method="POST"
              action="{{ route('courses.update', $course) }}">
            @csrf
            @method('PUT')

            @include('course._form')

            <div class="form-actions">
                <button class="btn" type="submit">
                    Save changes
                </button>

                <a class="btn btn-secondary"
                   href="{{ route('courses.show', $course) }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>

</x-layouts.app>
