
<x-layouts.app title="Course Details">

    <a class="back-link" href="{{ route('courses.index') }}">
        &larr; Back to courses
    </a>

    <div class="page-heading">
        <div>
            <span class="eyebrow">COURSE DETAILS</span>

            <h1>{{ $course->name }}</h1>

            <p class="muted">
                Course #{{ $course->id }}
            </p>
        </div>

        <a href="{{ route('courses.edit', $course) }}" class="btn">
            Edit course
        </a>
    </div>

    <div class="panel detail-grid">

        <div>
            <span class="detail-label">Description</span>
            <strong>{{ $course->description ?: 'Not provided' }}</strong>
        </div>

        <div>
            <span class="detail-label">Duration</span>
            <strong>{{ $course->duration }} weeks</strong>
        </div>

        <div>
            <span class="detail-label">Fee</span>
            <strong>{{ number_format((float) $course->fee, 2) }}</strong>
        </div>

        <div>
            <span class="detail-label">Difficulty</span>
            <strong>{{ $course->difficulty }}</strong>
        </div>

        <div>
            <span class="detail-label">Status</span>
            <strong>
                {{ $course->is_active ? 'Active' : 'Inactive' }}
            </strong>
        </div>

    </div>

</x-layouts.app>
