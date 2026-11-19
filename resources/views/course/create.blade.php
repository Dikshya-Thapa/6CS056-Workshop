
<x-layouts.app title="Create Course">

    <a class="back-link" href="{{ route('courses.index') }}">
        &larr; Back to courses
    </a>

    <div class="page-heading">
        <div>
            <span class="eyebrow">COURSES</span>
            <h1>Add a course</h1>

            <p class="muted">
                Create a new training course.
            </p>
        </div>
    </div>

    <div class="panel form-panel">
        <form method="POST" action="{{ route('courses.store') }}">
            @csrf

            @include('course._form')

            <div class="form-actions">
                <button class="btn" type="submit">
                    Create course
                </button>

                <a class="btn btn-secondary"
                   href="{{ route('courses.index') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>

</x-layouts.app>
