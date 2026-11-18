
<x-layouts.app title="Student Details">

    <a class="back-link" href="{{ route('students.index') }}">
        &larr; Back to students
    </a>

    <div class="page-heading">
        <div>
            <span class="eyebrow">STUDENT PROFILE</span>

            <h1>{{ $student->name }}</h1>

            <p class="muted">
                Student #{{ $student->id }}
            </p>
        </div>

        <a href="{{ route('students.edit', $student) }}" class="btn">
            Edit student
        </a>
    </div>

    <div class="panel detail-grid">
        <div>
            <span class="detail-label">Email address</span>
            <strong>{{ $student->email }}</strong>
        </div>

        <div>
            <span class="detail-label">Phone number</span>
            <strong>{{ $student->phone }}</strong>
        </div>

        <div>
            <span class="detail-label">Address</span>
            <strong>{{ $student->address ?: 'Not provided' }}</strong>
        </div>

        <div>
            <span class="detail-label">Date of birth</span>
            <strong>
                {{ $student->date_of_birth?->format('d M Y') ?? 'Not provided' }}
            </strong>
        </div>

        <div>
            <span class="detail-label">Age</span>
            <strong>{{ $student->age ?? 'Not available' }}</strong>
        </div>
    </div>

</x-layouts.app>
